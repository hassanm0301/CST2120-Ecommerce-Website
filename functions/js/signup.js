// registration for customers only

function register(){
    let request = new XMLHttpRequest;

    request.onload = () => {
        if (request.status === 200){
            let response = request.responseText
            alert(response)
        }
        else{
            alert("Problem connecting to server")
        }
    }

    request.open("POST", "functions/php/registerServer.php")
    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    let Fname = document.getElementById("Fname").value
    let Lname = document.getElementById("Lname").value
    let adress = document.getElementById("adress").value
    let email = document.getElementById("email").value
    let username = document.getElementById("username").value
    let password = document.getElementById("password1").value

    request.send(
        "Fname=" + Fname +
        "&Lname=" + Lname +
        "&adress=" + adress +
        "&email=" + email +
        "&username=" + username +
        "&password=" + password
    )
}