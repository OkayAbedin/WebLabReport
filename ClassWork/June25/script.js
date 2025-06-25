// function func() {
//     const username = document.getElementById("username").value;
//     if (username.length == 0) {
//         document.getElementById("error").innerHTML = "Please enter a username";
//         document.getElementById("error").style.color = "red";
//     }
//     else if (username.length > 0 && username.length < 3) {
//         document.getElementById("error").innerHTML = "Minimum 3 characters required";
//         document.getElementById("error").style.color = "red";
//     }
// }

// const form = document.getElementById("form");
// form.addEventListener('submit', function(e) {
//     e.preventDefault();
//     func();
// });



document.getElementById("username").addEventListener('input', function () {
    const username = document.getElementById("username").value;
    if (username.length == 0) {
        document.getElementById("error").innerHTML = "Please enter a username";
        document.getElementById("error").style.color = "red";
    }
    else if (username.length > 0 && username.length < 3) {
        document.getElementById("error").innerHTML = "Minimum 3 characters required";
        document.getElementById("error").style.color = "red";
    }
    else {
        document.getElementById("error").innerHTML = "";
    }
});

document.getElementById("password").addEventListener('input', function () {
    const password = document.getElementById("password").value;
    if (password.length == 0) {
        document.getElementById("error2").innerHTML = "Please enter a password";
        document.getElementById("error2").style.color = "red";
    }
    if (!/[A-Z]/.test(password)) {
        document.getElementById("error2").innerHTML = "At least one uppercase letter required";
        document.getElementById("error2").style.color = "red";
    }
    if (!/[a-z]/.test(password)) {
        document.getElementById("error3").innerHTML = "At least one lowercase letter required"
        document.getElementById("error3").style.color = "red";
    }
    if (!/[0-9]/.test(password)) {
        document.getElementById("error4").innerHTML = "At least one number required"
        document.getElementById("error4").style.color = "red";
    }
    if (!/[!@#$%^&*()]]/.test(password)) {
        document.getElementById("error5").innerHTML = "At least one special character required"
        document.getElementById("error5").style.color = "red";
    }
    if (/[A-Z]/.test(password)) {
        document.getElementById("error2").innerHTML = "Perfect Capital";
        document.getElementById("error2").style.color = "green";
    }
    if (/[a-z]/.test(password)) {
        document.getElementById("error3").innerHTML = "Perfect Lower"
        document.getElementById("error3").style.color = "green";
    }
    if (/[0-9]/.test(password)) {
        document.getElementById("error4").innerHTML = "Perfect Number"
        document.getElementById("error4").style.color = "green";
    }
    if (/[!@#$%^&*()]/.test(password)) {
        document.getElementById("error5").innerHTML = "Perfect Special"
        document.getElementById("error5").style.color = "green";
    }
});


function ipCheck(ip) {
    const parts = ip.split('.');
    let p1 = parts[0];
    let p2 = parts[1];
    let p3 = parts[2];
    let p4 = parts[3];
    console.log(p1 + " " + p2 + " " + p3 + " " + p4);
    if ((parseInt(p1) >= 0 && parseInt(p1) <= 255) && (parseInt(p2) >= 0 && parseInt(p2) <= 255) && (parseInt(p3) >= 0 && parseInt(p3) <= 255) && (parseInt(p4) >= 0 && parseInt(p4) <= 255) ) {
        return true;
    }
    return false;
};


document.getElementById("ipAddress").addEventListener('input', function () {
    const ipa = document.getElementById("ipAddress").value;
    if (ipCheck(ipa) === false) {
        document.getElementById("error6").innerHTML = "wrong ip address"
        document.getElementById("error6").style.color = "red";
    }
    else {
        document.getElementById("error6").innerHTML = "Okay";
        document.getElementById("error6").style.color = "green";
    }
});

document.getElementById("vno").addEventListener('input', function () {
    const vno = document.getElementById("vno").value;
    if (!/[A-Z]{3}-[A-Z]{1}-[0-9]{2}-[0-9]{4}/.test(vno)) {
        document.getElementById("error7").innerHTML = "wrong vehicle no"
        document.getElementById("error7").style.color = "red";
    }
    else {
        document.getElementById("error7").innerHTML = "Okay";
        document.getElementById("error7").style.color = "green";
    }
});

document.getElementById("hex").addEventListener('input', function () {
    const hex = document.getElementById("hex").value;
    if (!/^#[A-Fa-f0-9]{1,6}$/.test(hex)) {
        document.getElementById("error8").innerHTML = "wrong hex code"
        document.getElementById("error8").style.color = "red";
    }
    else {
        document.getElementById("error8").innerHTML = "Okay";
        document.getElementById("error8").style.color = "green";
    }
});