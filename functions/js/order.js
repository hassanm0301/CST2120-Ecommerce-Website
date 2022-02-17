let request = new XMLHttpRequest;

request.onload = () =>{
    if (request.status === 200){
        let response = (request.response)
        document.getElementById("orderTable").innerHTML = response

    }
}

request.open("POST", "functions/php/orderServer.php")
request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

request.send(
    "id=" + window.sessionStorage.getItem("id")
)