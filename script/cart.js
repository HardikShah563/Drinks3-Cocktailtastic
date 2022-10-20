var addTocart = document.querySelectorAll(".remove-from-cart");
var addTocartOverlay = document.querySelector(".remove-from-cart-overlay");
function addToCartClick() {
    addTocart.forEach(addtocart => {
        addtocart.addEventListener("click", () => {
            addTocartOverlay.classList.add("show");
            setTimeout(fadeOut, 3000);
        });
    });
}

function fadeOut() {
    addTocartOverlay.classList.remove("show");
}

setInterval(addToCartClick(), 1);