var calendar;
var Calendar = FullCalendar.Calendar;
var events = [];
$(function () {
  if (!!scheds) {
    Object.keys(scheds).map((k) => {
      var row = scheds[k];
      events.push({
        id: row.timeTbID,
        title: row.fristNameTime,
        start: row.Sheduldate,
        end: row.Sheduldate,
      });
    });
  }
  var date = new Date();
  var d = date.getDate(),
    m = date.getMonth(),
    y = date.getFullYear();

  calendar = new Calendar(document.getElementById("calendar"), {
    headerToolbar: {
      left: "prev,next today",
      right: "dayGridMonth,dayGridWeek",
      center: "title",
    },
    selectable: true,
    themeSystem: "bootstrap",
    //Random default events
    events: events,
    eventClick: function (info) {
      var _details = $("#event-details-modal");
      var id = info.event.id;
      if (!!scheds[id]) {
        _details.find("#title").text(scheds[id].Sheduldate);
        _details.find("#stTime").text(scheds[id].stTime);
        _details.find("#edTime").text(scheds[id].endTime);
        _details.find("#ClassName").text(scheds[id].className);
        _details.find("#Subjectname").text(scheds[id].subjectName);
        _details.find("#fstname").text(scheds[id].fristNameTime);
        _details.find("#lstname").text(scheds[id].lastNameTime);
        _details
          .find("#profile2")
          .html(
            "<img class='rounded-circle' src='backCode/uploadImage/" +
              scheds[id].imageTime +
              "' height='80%' width='80%'>"
          );

        if (scheds[id].transferSeeion == "1") {
          _details.find("#fstname_trsn").text(scheds[id].tra_frist_name);
          _details.find("#lstname_tran").text(scheds[id].tra_lastname);
          _details
            .find("#profile2_tran")
            .html(
              "<img class='rounded-circle' src='backCode/uploadImage/" +
                scheds[id].tra_image +
                "' height='100%' width='100%'>"
            );
        }
        _details.find("#edit,#delete").attr("data-id", id);
        _details.modal("show");
      } else {
        alert("Event is undefined");
      }
    },
    eventDidMount: function (info) {
      // Do Something after events mounted
    },
    editable: true,
  });

  calendar.render();

  // Form reset listener
  $("#schedule-form").on("reset", function () {
    $(this).find("input:hidden").val("");
    $(this).find("input:visible").first().focus();
  });

  // Edit Button
  /*$("#edit").click(function () {
    var id = $(this).attr("data-id");
    if (!!scheds[id]) {
      var _form = $("#schedule-form");
      console.log(
        String(scheds[id].start_datetime),
        String(scheds[id].start_datetime).replace(" ", "\\t")
      );
      _form.find('[name="id"]').val(id);
      _form.find('[name="title"]').val(scheds[id].title);
      _form.find('[name="description"]').val(scheds[id].description);
      _form
        .find('[name="start_datetime"]')
        .val(String(scheds[id].start_datetime).replace(" ", "T"));
      _form
        .find('[name="end_datetime"]')
        .val(String(scheds[id].end_datetime).replace(" ", "T"));
      $("#event-details-modal").modal("hide");
      _form.find('[name="title"]').focus();
    } else {
      alert("Event is undefined");
    }
  });*/

  // Delete Button / Deleting an Event
  $("#delete").click(function () {
    var id = $(this).attr("data-id");
    var buttonValue = "150";

    if (!!scheds[id]) {
      var eventDate = new Date(scheds[id].Sheduldate);
      var currentDate = new Date();

      // Check if the event date is in the past (before today)
      if (eventDate < currentDate && !isSameDay(eventDate, currentDate)) {
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "You cannot delete events for today or future dates.",
        });
        return; // Prevent further execution
      }

      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            type: "POST",
            url: "backCode/front_backend.php",
            data: { buttonValue: buttonValue, id: id },
            dataType: "dataType",
            success: function (response) {
              // Handle the success response if needed
            },
          });

          Swal.fire({
            title: "Deleted!",
            text: "Your time schedule has been deleted.",
            icon: "success",
          });

          location.reload();
        }
      });
    } else {
      alert("Event is undefined");
    }
  });
  function isSameDay(date1, date2) {
    return (
      date1.getFullYear() === date2.getFullYear() &&
      date1.getMonth() === date2.getMonth() &&
      date1.getDate() === date2.getDate()
    );
  }
  // ... (your existing code)
});
