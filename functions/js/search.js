function search(){
    let request = new XMLHttpRequest

    request.onload = () => {
        if(request.status == 200){
            let response = request.responseText;

            document.getElementById("productsContent").innerHTML = response
        }
        else{
            alert("Error " + request.status)
        }
    }

    if(window.sessionStorage.getItem("staff") == "true"){
        request.open("POST", "functions/php/browseAdminServer")
    }
    else{
        request.open("POST", "functions/php/browseServer.php")
    }
    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')

    searchItem = document.getElementById("searchBox").value
    sortItem = document.getElementById("sort").value

    console.log(searchItem)

    request.send(
        "search=" + searchItem +
        "&sort=" + sortItem
    )
}