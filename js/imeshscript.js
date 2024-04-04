function validateForm() {
    var jobTitle = document.getElementById("jobtitle").value;
    var companyName = document.getElementById("companyname").value;
    var salary = document.getElementById("salary").value;
    var checkbox = document.getElementById("checkbox");

    if (jobTitle === "") {
        alert("Please enter a Job Title");
        return false;
    }
    if (companyName === "") {
        alert("Please enter the company name");
        return false;
    }
    if (salary === "") {
        alert("Please enter the salary");
        return false;
    }

    if (!checkbox.checked) {
        alert("Please accept the Privacy policy & Terms");
        return false;
    }

    return true;
}


document.getElementById("checkbox").addEventListener("change", function() {
    var submitBtn = document.getElementById("submitbtn");
    submitBtn.disabled = !this.checked;
});