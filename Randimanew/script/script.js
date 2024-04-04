<script>
        // Get references to the buttons and input fields
        const sendMobileOTP = document.getElementById("sendMobileOTP");
        const sendEmailOTP = document.getElementById("sendEmailOTP");
        const otpInput = document.getElementById("otpInput");
        const submitBtn = document.getElementById("submitBtn");
        const newPasswordInput = document.getElementById("newPassword");
        const confirmPasswordInput = document.getElementById("confirmPassword");

        // Event handlers
        sendMobileOTP.addEventListener("click", function() {
            // Add logic to send OTP to mobile
            alert("Sending OTP to Mobile");
        });

        sendEmailOTP.addEventListener("click", function() {
            // Add logic to send OTP to email
            alert("Sending OTP to Email");
        });

        submitBtn.addEventListener("click", function() {
            const enteredOTP = otpInput.value;
            const newPassword = newPasswordInput.value;
            const confirmPassword = confirmPasswordInput.value;

            if (enteredOTP && newPassword && newPassword === confirmPassword) {
                // Password reset logic here
                alert("Password Reset Successful");
            } else {
                alert("Please enter a valid OTP and make sure passwords match.");