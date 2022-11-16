<!doctype html>
<html>
<head>
   @include('layout.head')
</head>
<body>
<div class="container-lg">
   <header class="">
       @include('layout.header')
   </header>
   <div id="main" class="">
           @yield('content')
   </div>

</div>
</body>
</html>