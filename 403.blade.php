<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Error 403 - Forbidden</title>
    <meta name="viewport" content="width=device-width">
    @include('errors.styles')
</head>
<body>
    <div class="wrapper">
        <h1>Unn</h1>
        <h2>Server Error: 403 (Forbidden)</h2>
        <hr>
        <h3>What does this mean?</h3>
        @if (session()->has('nop'))
            {{ session()->get('nop') }}
        @else
            <p>
                You Don't Have The Right Credentials To View The Requested Page.
            </p>
            <p>
                Perhaps you would like to go to our <a href="/">home page</a>?
            </p>
        @endif
    </div>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex, nofollow">
    <title>Oops! You're lost.</title>
    @include('errors.styles')
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <h1>404</h1>
            <h4>Oops! You're lost.</h4>
            <p>The page you are looking for was not found.</p>
        </div>
    </div>
</body>
</html>
