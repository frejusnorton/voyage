import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.Pusher = Pusher;

const echo = new Echo({
    broadcaster: 'pusher',
    key: 'd46e4ef36272ac0bd507', 
    cluster: 'eu', 
    forceTLS: true
});


echo.channel('chat.' + user)
    .listen('MessageSent', (event) => {
        console.log('Message reçu: ', event.message);
    });
