function fun()
{
    const username = document.getElementById("username").value;
    if(username.length==0){
        document.getElementById("error").innerHTML = "Please enter a username";
        document.getElementById("error").style.color = "red";
        event.preventDefault();
    }
    console.log(username);
    event.preventDefault();
    prompt("Ki obosta bhaye");
    alert("Hello");

    // document.write("pura html file er shob likha shoira eta bosbe ")

}

function lightOn() {
  let bulbImage = document.getElementById("bulbImg");
//   console.log(bulbImage);
  bulbOnSrc = "../Assets/pic_bulbon.gif";
  bulbImage.src = bulbOnSrc;
}

function lightOff() {
  let bulbImage = document.getElementById("bulbImg");
  bulbOffSrc = "../Assets/pic_bulboff.gif";
  bulbImage.src = bulbOffSrc;
}