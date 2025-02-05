self.addEventListener('push', function(event) {
    const payload = event.data ? event.data.json() : {};

    const title = payload.title || 'Task Reminder';
    const options = {
        body: payload.body || 'You have a task due.',
        icon: '/icon.png',
        data: payload.data || {}
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