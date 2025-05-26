function validateForm() {
    document.querySelectorAll('[id$="Error"]').forEach(el => el.textContent = '');

    const firstName = document.getElementById('firstName').value.trim();
    const email = document.getElementById('email').value.trim();
    const subject = document.getElementById('subject').value;
    const message = document.getElementById('message').value.trim();

    let isValid = true;
    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    if (!firstName) {
        document.getElementById('firstNameError').textContent = '==> First name is required';
        isValid = false;
    }
    
    if (!emailPattern.test(email)) {
        document.getElementById('emailError').textContent = '==> Enter valid email';
        isValid = false;
    }

    if (!subject) {
        document.getElementById('subjectError').textContent = '==> Select a subject';
        isValid = false;
    }

    if (!message) {
        document.getElementById('messageError').textContent = '==> Message is required';
        isValid = false;
    }

    // সফল Submission
    if (isValid) {
        alert('Thank you! Your message has been submitted.');
    }

    return isValid;
}