<!DOCTYPE HTML>
<html>

<head>

@include('template.partials._head')



</head>

<body>

<!-- CACHE -->

@include('template.partials._cache')

<!-- HEADER -->

@include('template.partials._header')

<!-- NAVBAR -->

@include('template.partials._nav')

<!-- FILTER -->

@include('template.partials._filter')

<!-- PORTFOLIO -->


@yield('content')

@include('template.partials._footer')



<!-- SCRIPT -->

@include('template.partials._scripts')


</body>


</html>
