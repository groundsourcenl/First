<!doctype html>
<html lang="en">
    <head>
        @include('partials._head')
    </head>

    <body>
                <!--Ddefault Bootstrap Nav bar--> 
        @include('partials._navbar')
       
        <div class="container">

            @yield('content')
            
            @include('partials._footer')
        </div>  <!--End of Container-->

            @include('partials._javascript')
            @yield('scripts')

    </body>
</html>