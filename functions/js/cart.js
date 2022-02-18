// hides checkout buttons if not logged in
if(window.sessionStorage.getItem("id") == null){
    document.getElementById("cartBtns").style = "display: none"
}
else{
    document.getElementById("cartBtns").style = "display: block"
}


// adds product ID to cart in session storage
function addToCart(id){
    if (window.sessionStorage.getItem("cart") == null){
        window.sessionStorage.setItem("cart", JSON.stringify([]))
    }

    try{
        var array = JSON.parse(window.sessionStorage.getItem("cart"))
    }
    catch{
        var array = []
    }
    array.push(id)
    window.sessionStorage.setItem("cart", JSON.stringify(array))
    alert("Added to cart")
}

// sends cart from session storage to server
// receives table of items in cart
function buildCart(){
    let request = new XMLHttpRequest

    request.onload=() => {
        if(request.status == 200){
            document.getElementById("cartTable").innerHTML = request.responseText
        }
        else{
            alert("Error!", request.status)
        }
    }

    request.open("POST", "functions/php/cartServer.php")
    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    let cartItems = window.sessionStorage.getItem("cart")
    if(cartItems == null){
        document.getElementById("cartTable").innerHTML = "Your cart is empty"
    }
    else{
        request.send("cartItems="+cartItems)
    }

}

// clears cart from sessionstorage
function clearCart(){
    window.sessionStorage.removeItem("cart")
    location.reload()
}


// sends cart to server
// alerts total price
// clears cart after
function checkout(){
    let request = new XMLHttpRequest

    request.onload=() => {
        if(request.status == 200){
            alert(request.responseText);
            clearCart()
        }
        else{
            alert("Error!", request.status)
        }
    }

    request.open("POST", "functions/php/checkoutServer.php")
    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    let cartItems = window.sessionStorage.getItem("cart")
    let id = window.sessionStorage.getItem("id")

    request.send("cartItems="+cartItems+"&id="+id)
}