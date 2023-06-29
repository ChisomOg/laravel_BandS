<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
        <style type="text/css">
            i{
                padding: 10px
            }
        </style>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: '#fb97316',
                        },
                    },
                },
            }
        </script>
        <title>B&S</title>

    </head>
    <body >
        <nav class="flex justify-between items-center mb-4">
            <a href="/">
                <img class="w-24" src="{{asset('images/logo.png')}}" alt="" class="logo">
            </a>
            <ul class="flex space-x-6 mr-6 text-lg">
                @auth
                <li>
                    <span class="font-bold uppercase">
                        Welcome {{auth()->user()->name}}
                    </span>
                </li>
                <li>
                    <form action="/logout" method="POST" class="inline">
                        @csrf
                        <button type="submit">
                            <i class="fa fa-solid fa-door-closed"></i> Logout
                        </button>
                    </form>
                </li>
                @else
                <li>
                    <a href="/register" class="hover:text-laravel">
                        <i class="fa fa-solid fa-user-plus"></i>
                        Register
                    </a>
                </li>
                <li>
                    <a href="/login" class="hover:text-laravel">
                        <i class="fa fa-solid fa-sign-in"></i>
                        Login
                    </a>
                </li>
                @endauth
            </ul>
        </nav>  

        <main> 
            {{$slot}}
        </main>

        <footer class="absolute buttom-0 left-0 w-full flex items-center justify-center font-bold bg-laravel 
 text-slate h-24 nt-24 opacity-70 nd:justify-center"> 
    <p class="ml-2">Copyright &copy; 2023, All Rights reserved</p>
    <a href="/product/create"
      class="absolute top-1/3 right-10 bg-slate-500 hover:bg-slate-600 text-white py-2
       px-3">Post A Product</a>
        </footer>
    </body>
</html>
