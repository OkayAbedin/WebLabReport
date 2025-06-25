document.addEventListener('DOMContentLoaded', function () {
    document.getElementById("fname").addEventListener('input', function () {
        const fname = document.getElementById("fname").value;
        if (fname.length == 0) {
            document.getElementById("fnameError").innerHTML = "Please enter first name";
            document.getElementById("fnameError").style.color = "red";
        }
        else if (!/^[A-Za-z]+$/.test(fname)) {
            document.getElementById("fnameError").innerHTML = "Only letters are allowed as name";
            document.getElementById("fnameError").style.color = "red";
        }
        else {
            document.getElementById("fnameError").innerHTML = "";
        }
    });

    document.getElementById("lname").addEventListener('input', function () {
        const lname = document.getElementById("lname").value;
        if (lname.length == 0) {
            document.getElementById("lnameError").innerHTML = "Please enter last name";
            document.getElementById("lnameError").style.color = "red";
        }
        else if (!/^[A-Za-z]+$/.test(lname)) {
            document.getElementById("lnameError").innerHTML = "Only letters are allowed as name";
            document.getElementById("lnameError").style.color = "red";
        }
        else {
            document.getElementById("lnameError").innerHTML = "";
        }
    });

    document.getElementById("email").addEventListener('input', function () {
        const email = document.getElementById("email").value;
        if (email.length == 0) {
            document.getElementById("emailError").innerHTML = "Please enter your email";
            document.getElementById("emailError").style.color = "red";
        }
        else if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email)) {
            document.getElementById("emailError").innerHTML = "Email address is not right";
            document.getElementById("emailError").style.color = "red";
        }
        else {
            document.getElementById("emailError").innerHTML = "";
        }
    });

    document.getElementById("subject").addEventListener('input', function () {
        const subject = document.getElementById("subject").value;
        if (subject.length == 0) {
            document.getElementById("subjectError").innerHTML = "Please enter a subject";
            document.getElementById("subjectError").style.color = "red";
        }
        else if (subject.length > 100) {
            document.getElementById("subjectError").innerHTML = "Subject is too lengthy, maximum 100 characters are allowed";
            document.getElementById("subjectError").style.color = "red";
        }
        else {
            document.getElementById("subjectError").innerHTML = "";
        }
    });
    
    document.getElementById("message").addEventListener('input', function () {
        const message = document.getElementById("message").value;
        if (message.length == 0) {
            document.getElementById("messageError").innerHTML = "Please enter a message";
            document.getElementById("messageError").style.color = "red";
        }
        else {
            document.getElementById("messageError").innerHTML = "";
        }
    });

    document.getElementById("phone").addEventListener('input', function () {
        const phone = document.getElementById("phone").value;
        if (phone.length == 0) {
            document.getElementById("phoneError").innerHTML = "Please enter a phone number";
            document.getElementById("phoneError").style.color = "red";
        }
        else if (!/^\+8801[3-9][0-9]{8}$/.test(phone)) {
            document.getElementById("phoneError").innerHTML = "Please enter phone number in correct format";
            document.getElementById("phoneError").style.color = "red";
        }
        else {
            document.getElementById("phoneError").innerHTML = "";
        }
    });

    document.getElementById("website").addEventListener('input', function () {
        const website = document.getElementById("website").value;
        if (website.length > 0 && !/^[a-zA-Z0-9-.]+\.[a-zA-Z]{2,3}$/.test(website)) {
            document.getElementById("webError").innerHTML = "Please use correct website format";
            document.getElementById("webError").style.color = "red";
        }
        else {
            document.getElementById("webError").innerHTML = "";
        }
    });
});
