// Define the msgbx class in the global scope
function msgbx(data) {
  this.data = data;
}

// check
msgbx.prototype.chackvalue = function (data) {
  Swal.fire(data);
};

// null
msgbx.prototype.nullvale = function () {
  Swal.fire({
    icon: "error",
    title: "Oops...",
    text: "Empty Value!",
    footer: "",
  });
};

// password
msgbx.prototype.passwordval = function () {
  Swal.fire({
    icon: "error",
    title: "Oops...",
    text: "Password character must be greater than 8",
    footer: "",
  });
};

// success
msgbx.prototype.okCompleted = function () {
  Swal.fire({
    position: "top-end",
    icon: "success",
    title: "Your work has been saved",
    showConfirmButton: false,
    timer: 1500,
  });
  location.reload();
};
