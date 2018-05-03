
var stripe = Stripe('pk_test_fWPNVn0LGU13JSj9H7ReuCEA');
var elements = stripe.elements();

var card = elements.create('card', {
  iconStyle: 'solid',
  style: {
    base: {
      iconColor: '#8898AA',
      color: '#000',
      lineHeight: '36px',
      fontWeight: 300,
      fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
      fontSize: '19px',

      '::placeholder': {
        color: '#8898AA',
      },
    },
    invalid: {
      iconColor: '#e85746',
      color: '#e85746',
    }
  },
  classes: {
    focus: 'is-focused',
    empty: 'is-empty',
  },
});
card.mount('#card-number');
var form = document.getElementById('checkout-form');
form.submit(function(e) {
    e.preventDefault();
    console.log("test");
//    $('#charge-error').addClass('invisible');
//    $form.find('button').prop('disabled', true);
//     var extraDetails = {
//    name: form.querySelector('input[id=card-name]').value,
//  };
//      stripe.createToken(card, extraDetails).then(setOutcome);
  
});

function setOutcome(){
    console.log("create");
}
//
//function stripeResponseHandler(status, response) {
//    if (response.error) {
//        // Show the errors on the form:
//        $('#charge-error').removeClass('hidden');
//        $('#charge-error').text(response.error.message);
//        $form.find('button').prop('disabled', false);
//    }else
//        //token created
//         var token = response.id;
//          // Insert the token ID into the form so it gets submitted to the server
//        var form = document.getElementById('checkout-form');
//        var hiddenInput = document.createElement('input');
//        hiddenInput.setAttribute('type', 'hidden');
//        hiddenInput.setAttribute('name', 'stripeToken');
//        hiddenInput.setAttribute('value', token);
//        form.appendChild(hiddenInput);
//
//        // Submit the form
//        form.submit();
//    }





//var elements = stripe.elements();
//// Custom styling can be passed to options when creating an Element.
//var style = {
//    base: {
//        // Add your base input styles here. For example:
//        fontSize: '16px',
//        color: "#32325d",
//    }
//};
//
//// Create an instance of the card Element
//var card = elements.create('card', {style: style});
//
//// Add an instance of the card Element into the `card-element` <div>
//card.mount('#card-element');
//var stripeResponseHandler = function(status, response) {
//    // Grab the form:
//    var form = document.getElementById('payment-form');
//
//    if (response.error) { // Problem!
//        // Show the errors on the form:
//    } else { // Token was created!
//        // Get the token ID:
//        var token = response.id;
//
//        // Insert the token ID into the form so it gets submitted to the server
//        var form = document.getElementById('payment-form');
//        var hiddenInput = document.createElement('input');
//        hiddenInput.setAttribute('type', 'hidden');
//        hiddenInput.setAttribute('name', 'stripeToken');
//        hiddenInput.setAttribute('value', token);
//        form.appendChild(hiddenInput);
//
//        // Submit the form
//        form.submit();
//    }
//};
//
//// Create a token when the form is submitted
//var form = document.getElementById('payment-form');
//form.addEventListener('submit', function(e) {
//e.preventDefault();
 