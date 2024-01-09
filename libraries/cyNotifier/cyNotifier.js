function CMN(message) {
  var notification = document.createElement("div");
  notification.className = "cyNotification message";
  notification.innerText = message;
  document.body.appendChild(notification);

  setTimeout(function () {
    notification.remove();
  }, 3000);
}

function CEN(error) {
  var notification = document.createElement("div");
  notification.className = "cyNotification error";
  notification.innerText = error;
  document.body.appendChild(notification);

  setTimeout(function () {
    notification.remove();
  }, 3000);
}

function CSN(successMessage) {
  var notification = document.createElement("div");
  notification.className = "cyNotification success";
  notification.innerText = successMessage;
  document.body.appendChild(notification);

  setTimeout(function () {
    notification.remove();
  }, 3000);
}
