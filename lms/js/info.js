// When the cart-plus button is clicked, populate the modal with the book ID
    let cartPlusButtons = document.querySelectorAll('.add-cart');
    let modalBookIdInput = document.getElementById('modal-book-id');
    let cartOptionForm = document.getElementById('cart-option-form');
    
    cartPlusButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            let bookId = this.getAttribute('data-bookid');
            modalBookIdInput.value = bookId;
        });
    });
    
    // When the form is submitted, close the modal
    cartOptionForm.addEventListener('submit', function() {
        let modal = document.getElementById('myModal2');
        let modalInstance = bootstrap.Modal.getInstance(modal);
        modalInstance.hide();
    });
