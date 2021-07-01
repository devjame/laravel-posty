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
            <a href="{{ route('home') }}" class="p-3">Home</a>
            <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
            <a href="{{ route('posts') }}" class="p-3">Posts</a>
        </div>
        <div class="flex items-center">
            @auth
                <a href="#" class="p-3">{{ auth()->user()->name }}</a>
                <form action="{{ route('logout') }}" method="POST" class="inline p-3">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
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
