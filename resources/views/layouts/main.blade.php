<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>home page</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"  rel="stylesheet">
  <!-- Bootstrap core CSS -->
<link  href="../test/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link  href="../test/css/mdb.min.css"  rel="stylesheet">
  <!-- Your custom styles (optional) -->
<link  href="../test/css/style.css"  rel="stylesheet">
</head>
<body>

  <!-- Start your project here-->  
 @include('layouts.navbar')

    @yield('content')


@include('layouts.footer')

  <!-- End your project here-->


<script type="text/javascript" src="../test/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../test/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../test/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../test/js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
