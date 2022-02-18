// file for requesting orders

let request = new XMLHttpRequest;

request.onload = () =>{
    if (request.status === 200){
        let response = (request.response)
        document.getElementById("orderTable").innerHTML = response

    }
}

request.open("POST", "functions/php/orderServer.php")
request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

if (window.sessionStorage.getItem("staff") == "true"){ // requests all orders(used by admins)
    var idsent = ""
}
else{
    var idsent = window.sessionStorage.getItem("id") // requests orders specific to current ID
}

request.send(
    "id=" + idsent
)