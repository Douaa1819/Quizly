var countdownDuration = 1;

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
        } else {
            updateCountdown();
        }

    }, 1000); 

}
window.onload = startCountdown;
document.addEventListener('DOMContentLoaded', function () {
    var answerRadios = document.querySelectorAll('.answer-radio');
    var nextButton = document.getElementById('next');
    answerRadios.forEach(function (radio) {
        radio.addEventListener('change', function () {
            nextButton.style.display = 'block';
        });
    });
});


const questionContainers = document.querySelectorAll('.question-container');
let currentIndex = 0;

function showNextQuestion() {
    questionContainers[currentIndex].style.display = 'none';
    currentIndex = (currentIndex + 1) % questionContainers.length;
    questionContainers[currentIndex].style.display = 'block';

    // Show/hide the "Next Question" button
    document.getElementById('next').style.display = currentIndex === questionContainers.length - 1 ? 'none' : 'block';
}