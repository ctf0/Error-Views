<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Error 404 - Page not found</title>
    <meta name="viewport" content="width=device-width">
    @include('errors.styles')
</head>
<body>
    <div class="wrapper">
        <div class="error-spacer"></div>
        <div role="main" class="main">
            <?php $messages = array('We need a map.', 'I think we\'re lost.', 'We took a wrong turn.'); ?>

            <h1><?php echo $messages[mt_rand(0, 2)]; ?></h1>
            <h2>Server Error: 404 (Page not found)</h2>
            <hr>
            <h3>What does this mean?</h3>
            <p>
                We couldn't find the page you requested on our servers. We're really sorry
                about that. It's our fault, not yours. We'll work hard to get this page
                back online as soon as possible.
            </p>
            <p>
                Perhaps you would like to go to our <a href="/">home page</a>?
            </p>
        </div>
    </div>
</body>
</html>
