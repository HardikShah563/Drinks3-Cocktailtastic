var removeFromcart = document.querySelectorAll(".remove-from-cart");
var removeFromCartOverlay = document.querySelector(".remove-from-cart-overlay");
function removeFromCartClick() {
    addTocart.forEach(addtocart => {
        addtocart.addEventListener("click", () => {
            removeFromCartClick.classList.add("show");
            setTimeout(fadeOut, 3000);
        });
    });
}

function fadeOut() {
    removeFromCartOverlay.classList.remove("show");
}

setInterval(addToCartClick(), 1);