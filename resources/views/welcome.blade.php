<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
       

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

    @php
        $color = 'red';
        $alert = 'alert';
    @endphp

    <body>
        <div class="container mx-auto ">
            <x-alert  :color="$color" class="mb-4">

                <x-slot name="title">
                    Titulo 1
                </x-slot>

                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
            </x-alert>


            <x-alert2 color="gray" class="mb-4">

                <x-slot name="title">
                    Titulo prueba2
                </x-slot>

                is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
            </x-alert2>


            <x-dynamic-component :component="$alert">
                
                <x-slot name="title">
                    Titulo prueba2
                </x-slot>

                is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
            </x-dynamic-component>

        </div>
        <script type='text/javascript' charset='utf-8'>
        var iframe = document.createElement('iframe');       
        document.body.appendChild(iframe);
        iframe.classList.add("float");

        iframe.setAttribute(
        'style',
        'position: fixed; bottom: 40px; right: -20px;  border: 0px;',
        );
        
        iframe.src = 'https://admin.relaccion.com/demo';       
        iframe.width = '100%';
        iframe.height = '100%';
    </script>
    </body>
</html>
