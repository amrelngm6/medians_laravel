self.addEventListener("push", function (event) {

    let data = {};
    if (event.data) {
        // let res = event.data.text();
        // data = JSON.parse(res);
        data = event.data.json();
    }

    const title = data.title || "Reminder Notification";
    const options = {
        body: data.body || "You have a new reminder!",
        icon: "/icon.png", // Replace with your notification icon
        badge: "/badge.png",
        data: { url: data.url || "/" },
    };
    
    event.waitUntil(
        self.registration.showNotification(title, options)
    );
});

self.addEventListener('notificationclick', function(event) {
    event.notification.close();

    // Open the URL from the notification data
    if (event.notification.data.url) {
        event.waitUntil(
            clients.openWindow(event.notification.data.url)
        );
    }
});