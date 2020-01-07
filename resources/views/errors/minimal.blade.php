<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('errors/404.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('errors/403.css')}}"> --}}

     
     
    </head>
    <body >
        <div class="flex-center position-ref full-height">
            @yield('404')
            <div class="code">
                @yield('code')
            </div>

            <div class="message" style="padding: 10px;">
                @yield('message')
            </div>
        </div>
    </body>
    <script>
    
    
    
    
    </script>
</html>
