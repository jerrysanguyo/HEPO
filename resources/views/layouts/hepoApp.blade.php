<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }

        #app {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
            display: flex;
            justify-content: center; 
            align-items: center;
            text-align: center;
        }

        .card-container {
            perspective: 1000px;
            cursor: pointer;
        }

        .card-2 {
            position: relative;
            width: 100%;
            height: 150px;
            transition: transform 0.6s, box-shadow 0.3s;
            transform-style: preserve-3d;
            transform-origin: center;
        }

        .card.flipped {
            transform: rotateY(180deg);
        }

        .card-front {
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            overflow: hidden;
            background-color: #a8d5ba; 
            color: #2d5f2e; 
            border-radius: 10px; 
            text-shadow: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .card-front .card-body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .card-front .card-title {
            font-size: 2rem; 
            font-weight: bold;
            letter-spacing: 1px; 
            text-transform: uppercase; 
            margin: 0;
        }

        .card-front,
        .card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            font-size: 1.5rem;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            overflow: hidden;
        }

        .card-back {
            background-color: #f8f9fa;
            transform: rotateY(180deg);
            z-index: 1; 
            transition: transform 0.6s ease;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.7); 
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9998;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s, visibility 0.3s;
        }

        .overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .overlay .card-2 {
            position: absolute;
            width: 80vw; 
            height: 90vh;
            transform: rotateY(180deg) scale(1);
            transition: transform 0.6s ease-in-out;
            z-index: 9999;
            cursor: pointer;
        }

        .org-img{
            width:10%;
            height:10%;
        }
    </style>
</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
        
        <footer class="bg-light text-center py-3 mt-auto fixed-bottom">
            <div class="container">
                <p class="mb-0">
                    &copy; {{ now()->year }} All rights reserved. <strong>Information Technology - City of Taguig</strong>
                </p>
            </div>
        </footer>
    </div>
</body>
</html>
