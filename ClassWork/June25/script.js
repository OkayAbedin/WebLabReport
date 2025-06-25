function func() {
    const username = document.getElementById("username").value;
    if (username.length == 0) {
        document.getElementById("error").innerHTML = "Please enter a username";
        document.getElementById("error").style.color = "red";
    }
    else if (username.length > 0 && username.length < 3) {
        document.getElementById("error").innerHTML = "Minimum 3 characters required";
        document.getElementById("error").style.color = "red";
    }
}

const form = document.getElementById("form");
form.addEventListener('submit', function(e) {
    e.preventDefault();
    func();
});