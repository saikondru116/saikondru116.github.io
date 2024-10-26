function validateForm() {
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const subject = document.getElementById("subject").value;
    const message = document.getElementById("message").value;

    // Validate name
    if (!name) {
        alert("Name must be filled out");
        return false;
    }

    // Validate email format
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address");
        return false;
    }

    // Validate subject
    if (!subject) {
        alert("Subject must be filled out");
        return false;
    }

    // Validate message
    if (!message) {
        alert("Message cannot be empty");
        return false;
    }

    return true; // If all validations pass
}