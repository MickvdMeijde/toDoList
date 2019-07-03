function notifyConnect() {
  var options = {
  silent: true,
  icon: images/favicon.png;
  }
  // Let's check if the browser supports notifications
  if (!("Notification" in window)) {
    alert("This browser does not support desktop notification", options);
  }

  // Let's check whether notification permissions have already been granted
  else if (Notification.permission === "granted") {
    // If it's okay let's create a notification
    var notification = new Notification("Successfully connected to database", options);
  }

  // Otherwise, ask user for permission
  else if (Notification.permission !== "denied") {
    Notification.requestPermission().then(function (permission) {
      // If granted create notification
      if (permission === "granted") {
        var notification = new Notification("Successfully connected to database", options);
      }
    });
  }
}
function notifyCreate() {
  // Check if browser supports notifications
  if (!("Notification" in window)) {
    alert("This browser does not support desktop notification", options);
  }

  // check if notification permissions are already granted
  else if (Notification.permission === "granted") {
    // If granted create notification
    var notification = new Notification("New record created successfully", options);
  }

  // Otherwise, ask user for permission
  else if (Notification.permission !== "denied") {
    Notification.requestPermission().then(function (permission) {
      // If granted create notification
      if (permission === "granted") {
        var notification = new Notification("New record created successfully", options);
      }
    });
  }
}