<p>Pay with Stripe:</p>

<form action="/payments" method="POST">
    <input type="hidden" name="amount" value="200">
    @csrf
    <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="{{ config('services.stripe.key') }}"
        data-amount="200"
        data-name="Stripe"
        data-locale="auto"
        data-label="Pay Now"
        data-zip-code="true"
        data-currency="usd">
    </script>
</form>