self.addEventListener("push", function (event) {
    console.log("Push event received:", event);

    let data = {};
    if (event.data) {
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

// self.addEventListener('push', function(event) {
//     // const payload = event.data ? event.data.json() : {};

//     // const title = payload.title || 'Task Reminder';
//     // const options = {
//     //     body: payload.body || 'You have a task due.',
//     //     icon: '/icon.png',
//     //     data: payload.data || {}
//     // };
//     const obj = event.data.json();

//     if (obj.action === "subscribe" || obj.action === "unsubscribe") {
//       fireNotification(obj, event);
//       port.postMessage(obj);
//     } else if (obj.action === "init" || obj.action === "chatMsg") {
//       port.postMessage(obj);
//     }

//     // event.waitUntil(
//     //     self.registration.showNotification(title, options)
//     // );
// });

self.addEventListener('notificationclick', function(event) {
    event.notification.close();

    // Open the URL from the notification data
    if (event.notification.data.url) {
        event.waitUntil(
            clients.openWindow(event.notification.data.url)
        );
    }
});