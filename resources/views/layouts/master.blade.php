<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../laravel.png">

    <title>My laravel project</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
</head>

<body>

@include('layouts.nav')

<div class="container">

    <div class="blog-header">
        <div class="container">
            <h1 class="blog-title">The Vitya's Blog</h1>
            <p class="lead blog-description">A test blog created with Laravel.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-8 blog-main">
        @yield('content')
        </div><!-- /.blog-main -->
        @include('layouts.sidebar')

    </div><!-- /.row -->

</div><!-- /.container -->
@include('layouts.footer')
</body>
</html>
