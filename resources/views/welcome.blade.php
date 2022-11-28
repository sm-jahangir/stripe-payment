<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>

<body>

    <div>
        <h2>Payment getway</h2>
    </div>
    @include('front.payments.partials.stripePayment')
</body>

</html>
