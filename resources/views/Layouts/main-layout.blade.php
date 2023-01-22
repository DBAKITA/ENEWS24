<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ENEWS24......@yield('page title')</title>
    <link rel="stylesheet" href="bootstrap.css"> 
</head>
<body class = "container">

<div class = "row mt-5">
    <div class = "col-md-4">
    <div class = "list-group">
       <a class= "list-group-item"> MAIN MENU</a>
       <a class="list-group-item"  href="/">Home</a>
       <li class="list-group-item"> <a href="/about"> About Us </a></li>
       <li class="list-group-item"> <a href="/contact"> Contact Us </a></li>
       <li class="list-group-item"> <a href="/categories"> Category Listing </a></li>
       <li class="list-group-item"> <a href="/posts">Posts</a></li>
       
    
</div>
    </div>
<div class = "col-md-8 border-left">
@yield('content')

</div>
</div>

<hr>

<b> (C) 2023 - ENEWS24</b>

</body>
</html>