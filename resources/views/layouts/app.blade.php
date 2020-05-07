<!DOCTYPE html>
<html lang="en">
 <head>
     @include('layout.partials.head')
     @yield('extra-css')
 </head>
 <body>
     
    <nav class="navbar navbar-expand-md navbar-dark bg-custom fixed-top navf ">
        @include('layout.partials.nav')
    </nav>
    <main id="main"  class="container clear-top" style="height:80%;">

        @yield('content')
           
    </main>
    @yield('extra-js')
    
    @include('layout.partials.footer')
    @include('layout.partials.scripts')
    
 </body>
</html>