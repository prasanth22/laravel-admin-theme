<!DOCTYPE html>
<html lang="en">
 <head>
   @include('layouts.partials.header')
 </head>
 <body>
@include('layouts.partials.nav')
</br></br>
@include('layouts.partials.sidebar')
@yield('content')
@include('layouts.partials.footer-scripts')
 </body>
</html>