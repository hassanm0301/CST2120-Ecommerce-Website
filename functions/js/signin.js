
// function for customer and admin sign in
function signin(){
    let request = new XMLHttpRequest;

    request.onload = () =>{
        if (request.status === 200){
            let response = JSON.parse(request.response);
            console.log(response)

            // validation
            if(response == "1"){
                alert("Error! Username not found")
            }
            else if(response == "2"){
                alert("Wrong password")
            }
            else{
                alert(response.msg)
                window.sessionStorage.setItem("loggedIn", true)
                window.sessionStorage.setItem("staff", response.staffCheck)
                window.sessionStorage.setItem("username", response.username)
                window.sessionStorage.setItem("id", response.id)
                document.getElementById("loggedIn").innerHTML = "Logged in as " + response.username
            }
        }
        else{
            alert("Error!", request.status)
        }
    }

    request.open("POST", "functions/php/signinServer.php")
    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    let usrname = document.getElementById("usrname").value;
    let passwrd = document.getElementById("passwrd").value;
    let staffCheck = document.getElementById("staffCheck").checked;
    console.log(usrname, passwrd)

    request.send(
        "usrname=" + usrname +
        "&passwrd=" + passwrd +
        "&staffCheck=" + staffCheck
    )
}