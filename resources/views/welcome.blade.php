<html lang="{{ app()->getLocale() }}">
<head>
    <title>Laravel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
<div id="app">
{{--    <my-component></my-component>--}}
{{--    <conditional-rendering></conditional-rendering>--}}
    <list-rendering></list-rendering>
    <user-dashboard></user-dashboard>
{{--    <my-text></my-text>--}}
{{--    <user></user>--}}
</div>
<script src="/js/app.js"></script>
</body>
</html>

