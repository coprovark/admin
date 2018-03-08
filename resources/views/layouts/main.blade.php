<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
   <title>@yield('title')</title> 

</head>

<body>

<a href="/page1">page1</a>
<a href="/page2">page2</a>
<a href="/page3">page3</a>

<hr>
<session>

    @yield('content')

</session>

<hr>

<footer>
    @ power By UBRU 2018
</footer>

</body>




</html>