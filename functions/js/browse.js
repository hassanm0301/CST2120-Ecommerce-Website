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

request.open("GET", "functions/php/browse.php")

request.send()