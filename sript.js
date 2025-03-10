document.getElementById('registrationForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent the form from submitting traditionally

    // Get form data
    const formData = new FormData(this);

    // Send AJAX request
    fetch('register.php', { // Replace with your PHP file handling registration
        method: 'POST',
        body: formData
    })
    .then(response => response.json()) // Assuming the server responds with JSON
    .then(data => {
        // Display response message
        const responseMessage = document.getElementById('responseMessage');
        if (data.success) {
            responseMessage.innerHTML = `<div class="alert alert-success">${data.message}</div>`;
        } else {
            responseMessage.innerHTML = `<div class="alert alert-danger">${data.message}</div>`;
        }
    })
    .catch(error => {
        console.error('Error:', error);
        document.getElementById('responseMessage').innerHTML = `<div class="alert alert-danger">An error occurred. Please try again.</div>`;
    });
});