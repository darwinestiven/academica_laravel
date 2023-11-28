// messages.js

document.addEventListener('DOMContentLoaded', function () {
    setTimeout(function () {
        document.querySelectorAll('.hide-message').forEach(function (message) {
            message.style.display = 'none';
        });
    }, 2000);
});
