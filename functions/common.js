if(window.sessionStorage.getItem("loggedIn") == "true"){
    document.getElementById("loggedIn").innerHTML = "logged in as " + window.sessionStorage.getItem("username")
    document.getElementById("signIna").innerHTML = "Update details"
}

if(window.sessionStorage.getItem("staff") == "false"){
    document.getElementById("cmsa").style = "display:none"
}