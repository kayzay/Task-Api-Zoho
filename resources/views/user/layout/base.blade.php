<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="{{asset("css/bootstrap.css")}}"  rel="stylesheet">
   {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">--}}
</head>
<body>
<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-center py-3 mb-4 border-bottom">

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{route('home')}}" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="{{route('add_contact')}}" class="nav-link px-2 link-dark">New contact</a></li>
        <li><a href="{{route('add_deals')}}" class="nav-link px-2 link-dark">New Deals</a></li>
    </ul>


</header>
<div class="container">
    @yield("content")
</div>
<script src="{{asset("js/bootstrap.js")}}"></script>
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>--}}
</body>
</html>
