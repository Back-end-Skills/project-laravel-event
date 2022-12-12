<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">
      
    </head>
    <body>
        <header>
            <ul>
                <li><a href="/products">products</a> </li>
                <li><a href="/product">product</a> </li>
                <li><a href="/contact">contact</a> </li>
            </ul> 

        </header>

        @yield('content')

        <footer>
            <p>Dev Isaque Menezes &copy; @php echo date('Y'); @endphp</p>
            <script src="/js/custom.js"></script> 
        </footer>
    
    </body>
</html>
