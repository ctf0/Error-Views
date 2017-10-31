<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Error 429 - Too Many Attempts</title>
    <meta name="viewport" content="width=device-width">
    @include('errors.styles')
</head>
<body>
    <div class="wrapper">
        <h1>Unn</h1>
        <h2>Server Error: 429 (Too Many Attempts)</h2>
        <hr>
        <h3>What does this mean?</h3>
        <p>
            You Have Made {{ trans('auth.throttle', ['seconds'=> $retryAfter]) }}.
        </p>
    </div>
</body>
</html>
