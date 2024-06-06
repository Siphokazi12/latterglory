function validateForm() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var subject = document.getElementById('subject').value;
    var message = document.getElementById('message').value;

    var nameError = document.getElementById('nameError');
    var emailError = document.getElementById('emailError');
    var subjectError = document.getElementById('subjectError');
    var messageError = document.getElementById('messageError');

    // Reset error messages
    nameError.innerHTML = '';
    emailError.innerHTML = '';
    subjectError.innerHTML = '';
    messageError.innerHTML = '';

    var isValid = true;

    // Validate name
    if (name === '') {
        nameError.innerHTML = 'Name is required.';
        isValid = false;
    }

    // Validate email
    if (email === '') {
        emailError.innerHTML = 'Email is required.';
        isValid = false;
    } else if (!isValidEmail(email)) {
        emailError.innerHTML = 'Invalid email address.';
        isValid = false;
    }

    // Validate subject
    if (subject === '') {
        subjectError.innerHTML = 'Subject is required.';
        isValid = false;
    }

    // Validate message
    if (message === '') {
        messageError.innerHTML = 'Message is required.';
        isValid = false;
    }

    return isValid;
}

function isValidEmail(email) {
    // Regular expression for basic email validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}
