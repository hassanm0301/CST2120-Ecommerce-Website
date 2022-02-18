// Fetches all available products to display on page

let request = new XMLHttpRequest

request.onload = () => {
    if (request.status == 200){
        let response = request.responseText;

        document.getElementById("productsContent").innerHTML = response
    }
    else {
        alert("Problem connecting to server")
    }
}

if(window.sessionStorage.getItem("staff") == "true"){
    request.open("GET", "functions/php/browseAdminServer.php")
}
else{
    request.open("GET", "functions/php/browseServer.php")
}


request.send()

