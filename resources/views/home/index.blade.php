<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        #endDate, #startDate {
            color: white;
        }
    </style>
</head>
<!-- body -->
<body class="main-layout">
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#"/></div>
</div>
<!-- end loader -->
<!-- header -->
<header>
    <!-- header inner -->
    @include('home.header')
</header>
<!-- end header inner -->
<!-- end header -->
<!-- banner -->
@include('home.slider')
<!-- end banner -->
<!-- about -->
@include('home.about')
<!-- end about -->
<!-- our_room -->
@include('home.rooms')
<!-- end our_room -->
<!-- gallery -->
@include('home.galary')
<!-- end gallery -->
<!-- blog -->

<!-- end blog -->
<!--  contact -->
@include('home.contact')
<!-- end contact -->
<!--  footer -->
@include('home.footer')
</body>
</html>
