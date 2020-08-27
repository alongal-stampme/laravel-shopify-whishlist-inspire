import "../css/custom.css"

function addWishlist() {
    console.log('adding item to whislist')
}

function removeWishlist() {
    console.log("remove from wishlist")
    // send https request
}

var wishlistButton = document.querySelector('.codeinspire-wishlist-btn')

wishlistButton.addEventListener('click', function() {

    if (this.classList.contains('active')) {
        removeWishlist()
        this.classList.remove('active')
    } else {
        this.classList.add('active')
        addWishlist()
    }
})
