//Thise file contains commands used by all other files for the frontend


// makes necessary changed when user is logged in
if(window.sessionStorage.getItem("loggedIn") == "true"){
    document.getElementById("loggedIn").innerHTML = "logged in as " + window.sessionStorage.getItem("username")
    document.getElementById("signIna").innerHTML = "Update details"
    document.getElementById("signIna").href = "update.php"
    document.getElementById("signUpa").innerHTML = "View orders"
    document.getElementById("signUpa").href = "orders.php"
}

// changes for when a staff is logged in
if(window.sessionStorage.getItem("staff") == "true"){
    document.getElementById("cmsa").style = "display:block"
    document.getElementById("signIna").style = "display: none"
}

// makes search bar available only in browse.php
if(window.location.href.slice(-10) == "browse.php"){
    document.getElementById("searchBar").style = "display: block"
}
else{
    document.getElementById("searchBar").style = "display: none"
}