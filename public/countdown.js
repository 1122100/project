// public/js/countdown.js

// Set the date we're counting down to
const countDownDate = new Date("Oct 30, 2024 15:37:25").getTime(); // Ganti dengan tanggal dan waktu target Anda

// Update the count down every 1 second
const x = setInterval(function() {
    const now = new Date().getTime();
    const distance = countDownDate - now;

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.querySelectorAll('.countdown span').forEach((element, index) => {
        if (index === 0) {
            element.style.setProperty('--value', days);
        } else if (index === 1) {
            element.style.setProperty('--value', hours);
        } else if (index === 2) {
            element.style.setProperty('--value', minutes);
        } else if (index === 3) {
            element.style.setProperty('--value', seconds);
        }
    });

    if (distance < 0) {
        clearInterval(x);
        document.querySelector('.countdown').innerHTML = "EXPIRED";
    }
}, 1000);
