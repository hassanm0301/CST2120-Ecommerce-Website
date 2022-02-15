function update(){
    let request = new XMLHttpRequest;

    request.onload = () => {
        if (request.status === 200){
            alert("Update successful")
        }
        else{
            alert("Problem connecting to server")
        }
    }

    request.open("POST", "functions/update.php")
    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    let Fname = document.getElementById("Fname").value
    let Lname = document.getElementById("Lname").value
    let adress = document.getElementById("adress").value
    let email = document.getElementById("email").value
    let username = document.getElementById("username").value
    let password = document.getElementById("password1").value
    let id = window.sessionStorage.getItem("id")

    request.send(
        "Fname=" + Fname +
        "&Lname=" + Lname +
        "&adress=" + adress +
        "&email=" + email +
        "&username=" + username +
        "&password=" + password +
        "&id=" + id
    )
}