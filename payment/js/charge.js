// Create a Stripe client
var stripe = Stripe('pk_test_51HXMA8Fdae3cPvdKeH9RIewIiZrzJ8o8TQi0GjAva3c4WZmilePhOxjVI41iNig1sDZa4IRJkw87tR8vagvlQh7e001qEgsOYr');
console.log(stripe);
// Create an instance of Elements
var elements = stripe.elements();

// Create an instance of the card Element
var card = elements.create('card');

// Add an instance of the card Element into the `card-element` <div>
card.mount('#card-element');

// Handle real-time validation errors from the card Element.
card.addEventListener('change', function(event) {
    var displayError = document.getElementById('card-errors');
    if (event.error) {
        displayError.textContent = "Failure";
    } else {
        displayError.textContent = '';
    }
});

// Handle form submission
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
    event.preventDefault();

    stripe.createToken(card).then(function(result) {
        if (result.error) {
            // Inform the user if there was an error
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
        } else {
            // Send the token to your server
            stripeTokenHandler(result.token);
        }
    });
});

function stripeTokenHandler(token) {
    // Insert the token ID into the form so it gets submitted to the server
    var form = document.getElementById('payment-form');
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);

    // Submit the form
    form.submit();
}