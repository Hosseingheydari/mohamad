<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.ve
        bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->

        @vite(['resources/css/app.css', ' /js/app.js','resources/scss/app.scss'])
        <style>
            body{
                background-color :rgb(0, 255, 102) ;

            }
        </style>
    </head>
    <body class="font-sans antialiased">

        <div   class="min-h-screen bg-blue-100">
            @include('layouts.navigation')
            <!-- Page Heading -->
            <header class="bg-blue-400 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
            <!-- Page Content -->
            <main class='bg-orange-400'>
                {{ $slot }}
            </main>
        </div>
        {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> --}}
    </body>
</html>
