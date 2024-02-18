//////////////////space button 151
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

        // if (scheds[id].transferSeeion == "1") {
        _details.find("#fstname_trsn").text(scheds[id].tra_frist_name);
        _details.find("#lstname_tran").text(scheds[id].tra_lastname);
        _details
          .find("#profile2_tran")
          .html(
            "<img class='rounded-circle' src='backCode/uploadImage/" +
              scheds[id].tra_image +
              "' height='100%' width='100%'>"
          );
        // }

        var confirmButton = _details.find(
          "#Confirm_My_session, #Transfersession"
        );

        /////////////////must be contine////////////////////////

        if (
          scheds[id].cnfempid === scheds2 &&
          (scheds[id].crmSession === "1" || scheds[id].transferSeeion === "1")
        ) {
          // alert();
          confirmButton.prop("disabled", true);
        }
        if (scheds[id].tran_empid === scheds2 && scheds[id].tran_cnf === "1") {
          confirmButton.prop("disabled", true);
        }
        //false
        if (
          scheds[id].cnfempid === scheds2 &&
          (scheds[id].crmSession === "0" || scheds[id].transferSeeion === "0")
        ) {
          if (
            scheds[id].crmSession === "0" &&
            scheds[id].transferSeeion === "0"
          ) {
            confirmButton.prop("disabled", false);
          }
          if (
            scheds[id].crmSession === "0" &&
            scheds[id].transferSeeion === "1"
          ) {
            confirmButton.prop("disabled", true);
          }

          if (scheds[id].crmSession === "1") {
            confirmButton.prop("disabled", true);
          }
        }
        /*  if (scheds[id].tran_empid === scheds2 && scheds[id].tran_cnf === "0") {
          confirmButton.prop("disabled", false);
        }*/

        /*  const disableConfirmButton =
          scheds[id].crmSession === "1" ||
          (scheds[id].transferSeeion === "1" &&
            scheds[id].cnfempid === scheds2) ||
          (scheds[id].tran_empid === scheds2 && scheds[id].tran_cnf === "1");
        confirmButton.prop("disabled", disableConfirmButton);*/

        _details
          .find("#edit,#delete,#Confirm_My_session,#Transfersession")
          .attr("data-id", id);

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

  $("#Transfersession").click(function () {
    var id = $(this).attr("data-id");
    if (!!scheds[id]) {
      var _form = $("#schedule-form");
      /*console.log(
        String(scheds[id].start_datetime),
        String(scheds[id].start_datetime).replace(" ", "\\t")
      );*/
      _form.find('[name="tblID"]').val(scheds[id].timeTbID);
      _form.find('[name="id"]').val(scheds[id].timeTbID);
      _form.find('[name="titile_datetime"]').val(scheds[id].Sheduldate);
      _form.find('[name="clz"]').val(scheds[id].className);
      _form.find('[name="sbj"]').val(scheds[id].subjectName);
      _form
        .find('[name="fromteacher"]')
        .val(scheds[id].fristNameTime + " " + scheds[id].lastNameTime);
      _form
        .find('[name="starttime"]')
        .val(String(scheds[id].stTime).replace(" ", "T"));
      _form
        .find('[name="endtime"]')
        .val(String(scheds[id].endTime).replace(" ", "T"));
      $("#event-details-modal").modal("hide");
      _form.find('[name="title"]').focus();
    } else {
      alert("Event is undefined");
    }
  });

  // Confirm_My_session
  $("#Confirm_My_session").click(function () {
    var getid = $(this).attr("data-id");
    var buttonValue = "152";
    var scheds3 = scheds2;
    //alert(scheds3);
    $.ajax({
      type: "POST",
      url: "backCode/front_backend.php", // Your PHP script URL
      data: {
        buttonValue: buttonValue,
        getid: getid,
        scheds3: scheds3,
      }, // Data to be sent to the server
      success: function (response) {
        //Swal.fire(response);
        //alert(response);
        Swal.fire({
          position: "top-end",
          icon: "success",
          title: "now you confirmed your session",
          showConfirmButton: false,
          timer: 1500,
        });
        location.reload();
      },
    });
  });

  // Delete Button / Deleting an Event
  /* $("#delete").click(function () {
    var id = $(this).attr("data-id");
    var buttonValue = "150";

    if (!!scheds[id]) {
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
  }*/
  // ... (your existing code)
});
