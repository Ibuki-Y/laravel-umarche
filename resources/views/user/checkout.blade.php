<p>決済ページへリダイレクトします</p>
<script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
<script src="https://js.stripe.com/v3/"></script>
<script>
  const publicKey = '{{ $publicKey }}';
  const stripe = Stripe(publicKey);
  window.onload = function() {
    stripe.redirectToCheckout({
      sessionId: '{{ $session->id }}'
    }).then(function(result) {
      window.location.href = '{{ route('user.cart.index') }}';
    });
  }
</script>
