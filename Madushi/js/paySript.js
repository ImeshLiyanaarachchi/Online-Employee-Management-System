document.getElementById("paymentForm").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent the form from submitting by default.

    // Get form input values
    const cardNumber = document.getElementById("cardNumber").value;
    const expirationDate = document.getElementById("expirationDate").value;
    const securitycode = document.getElementById("securitycode").value;

    // Perform client-side validation
    if (!isValidCardNumber(cardNumber) || !isValidExpirationDate(expirationDate) || !isValidsecuritycode(securitycode)) {
        alert("Please check your payment information and try again.");
    } else {
        // If validation passes, you can submit the form to the server.
        this.submit();
    }
});

function isValidCardNumber(cardNumber) {
    // Implement your card number validation logic here.
    return true; // Replace with your validation code.
}

function isValidExpirationDate(expirationDate) {
    // Implement your expiration date validation logic here.
    return true; // Replace with your validation code.
}

function isValidsecuritycode(securitycode) {
    // Implement your securitycode validation logic here.
    return true; // Replace with your validation code.
}