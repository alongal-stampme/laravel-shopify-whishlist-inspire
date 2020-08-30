import "../css/custom.css"

require("noty/src/noty.scss");
require("noty/src/themes/mint.scss");

window.Noty = require('noty')

function addWishlist(customer, productId) {
    new Noty({
        type: 'success',
        layout: 'topRight',
        text: 'Added to wishlist',
        timeout: 3000,
    }).show();

    // ajax request to the server
}

function removeWishlist() {
    new Noty({
        type: 'warning',
        layout: 'topRight',
        text: 'Removed from wishlist',
        timeout: 3000,
    }).show();
}

var wishlistButton = document.querySelector('.codeinspire-wishlist-btn')

wishlistButton.addEventListener('click', function () {

    if (this.classList.contains('active')) {
        removeWishlist()
        this.classList.remove('active')
    } else {
        this.classList.add('active')
        let customer = this.dataset.customer
        let id = this.dataset.product
        // console.log('This: ', this.dataset.product)
        addWishlist(customer, id)
    }
})
