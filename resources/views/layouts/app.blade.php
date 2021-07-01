<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posty</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body class="bg-gray-200">
    <nav class="p-3 bg-white flex justify-between mb-6">
        <div class="flex items-center">
            <a href="#" class="p-3">Home</a>
            <a href="#" class="p-3">Dashboard</a>
            <a href="#" class="p-3">Posts</a>
        </div>
        <div class="flex items-center">
            @auth
                <a href="#" class="p-3">jack</a>
                <a href="#" class="p-3">Logout</a>
            @endauth

            @guest
                <a href="{{ route('login') }}" class="p-3">Login</a>
                <a href="{{ route('register') }}" class="p-3">Register</a>
            @endguest
            
            
            
        </div>
    </nav>
    @yield('content')
</body>
</html>
