<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>OAuth Tool | Helps you create access tokens for your development environment</title>
    <link href="/assets/styles.css" rel="stylesheet" />
    <link href="/vendor/foundation/css/foundation.min.css" rel="stylesheet" />
    @yield('styles')
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation.min.js"></script>
    <script>//-- local fallbacks if needed 
    	window.jQuery || document.write('<script src="/vendor/jquery/jquery.min.js"><\/script>');
    	window.Foundation || document.write('<script src="/vendor/js/foundation.min.js"><\/script>');
    </script>
    @yield('scripts')
</head>
<body>
    @yield('content')
    <script>$(document).foundation();</script>
</body>
</html>
