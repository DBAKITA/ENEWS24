<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ENEWS24......@yield('page title')</title>
</head>
<body>

<h2> @yield('heading')</h2>

<hr>

{{--My menu can come here--}}
<ul>
    <li> <a href="/"> HOME </a> </li>
    <li> <a href="/about"> ABOUT US </a></li>
    <li> <a href="/contact"> CONTACT US </a></li>
</ul>
@yield('content')

<hr>

<b> (C) 2023 - ENEWS24</b>

</body>
</html>