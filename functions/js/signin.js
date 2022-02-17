function signin(){
    let request = new XMLHttpRequest;

    request.onload = () =>{
        if (request.status === 200){
            let response = JSON.parse(request.responseText);

            if(response["err"] == "1"){
                alert("Username does not exist")
            }
            else if(response["err"] == "2"){
                alert("Wrong password")
            }
            else{
                window.sessionStorage.setItem("loggedIn", true)
                window.sessionStorage.setItem("staff", response.staffCheck)
                window.sessionStorage.setItem("username", response.username)
                window.sessionStorage.setItem("id", response.id)
                document.getElementById("loggedIn").innerHTML = "Logged in as " + response.username
            }
        }
    }

    request.open("POST", "functions/php/signinServer.php")
    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let staffCheck = document.getElementById("staffCheck").checked;


    request.send(
        "username=" + username +
        "&password=" + password +
        "&staffCheck=" + staffCheck
    )
}