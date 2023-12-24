var countdownDuration = 5;

function updateCountdown() {
    document.getElementById('countdown').innerText = countdownDuration;
}

function startCountdown() {
    updateCountdown();

    var countdownInterval = setInterval(function () {
        countdownDuration--;

        if (countdownDuration < 0) {
            clearInterval(countdownInterval);
            document.getElementById('countdown').style.display = 'none';
            document.getElementById('questionContent').style.display = 'block';
            document.getElementById('footer').style.display = 'block';
        } else {
            updateCountdown();
        }

    }, 1000); 

 
}
window.onload = startCountdown;