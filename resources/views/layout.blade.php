<!DOCTYPE html>
<html lang="en">
 <head>
     @include('layout.partials.head')
     @yield('extra-css')
 </head>
 <body>
     
    
    <main id="main"  class="container clear-top">
        <nav class="navbar navbar-expand-md navbar-dark bg-custom fixed-top navf ">
            @include('layout.partials.nav')
        </nav>
        @yield('content')
           
    </main>
    @yield('extra-js')
    
    @include('layout.partials.footer')
    @include('layout.partials.scripts')
    
 </body>
</html>