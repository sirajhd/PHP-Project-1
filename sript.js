// Add an event listener to the form with the ID 'registrationForm'
document.getElementById('registrationForm').addEventListener('submit', function(e) {
    // Prevent the default form submission behavior (page reload)
    e.preventDefault();

    // Create a FormData object to collect all the data from the form fields
    const formData = new FormData(this);

    // Send an AJAX request using the Fetch API
    fetch('register.php', { // Replace 'register.php' with your server-side script
        method: 'POST', // Use the POST method to send data
        body: formData // Send the FormData object as the request body
    })
    // Parse the response as JSON
    .then(response => response.json())
    
    // Handle the JSON data returned from the server
    .then(data => {
        // Get the element where the response message will be displayed
        const responseMessage = document.getElementById('responseMessage');
        
        // Check if the server response indicates success
        if (data.success) {
            // Display a success message using Bootstrap's alert-success class
            responseMessage.innerHTML = <div class="alert alert-success">${data.message}</div>;
        } else {
            // Display an error message using Bootstrap's alert-danger class
            responseMessage.innerHTML = <div class="alert alert-danger">${data.message}</div>;
        }
    })
    // Handle any errors that occur during the fetch request
    .catch(error => {
        // Log the error to the console for debugging
        console.error('Error:', error);
        
        // Display a generic error message to the user
        document.getElementById('responseMessage').innerHTML = '<div class="alert alert-danger">An error occurred. Please try again.</div>';
    });
});