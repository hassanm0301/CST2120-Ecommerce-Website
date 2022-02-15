if(window.sessionStorage.getItem("loggedIn") == "true"){
    document.getElementById("loggedIn").innerHTML = "logged in as " + window.sessionStorage.getItem("username")
    document.getElementById("signIna").innerHTML = "Update details"
    document.getElementById("signIna").href = "update.php"
}

if(window.sessionStorage.getItem("staff") == "false"){
    document.getElementById("cmsa").style = "display:none"
}