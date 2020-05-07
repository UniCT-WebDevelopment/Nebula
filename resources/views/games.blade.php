<!DOCTYPE html>
<html lang="en">
 <head>
     @include('layout.partials.headgame')
 </head>
 <body>
    <main id="main" >
        <nav class="navbar navbar-expand-md navbar-dark bg-custom fixed-top navf ">
            @include('layout.partials.nav')
        </nav>
   
       
    @yield('content')
   
  
</main>
    @include('layout.partials.footer')
    @include('layout.partials.scripts2')

 </body>
</html>