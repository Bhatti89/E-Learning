// public/js/matching_quiz.js

document.getElementById('matchingForm').addEventListener('submit', function (event) {
    event.preventDefault();

    const formData = new FormData(this);

    fetch('/save-matching-pairs', {
        method: 'POST',
        body: formData,
    })
    .then(response => response.json())
    .then(data => {
        console.log(data.message);
        // Handle success or show a message to the user
    })
    .catch(error => {
        console.error('Error:', error);
        // Handle error or show a message to the user
    });
});
