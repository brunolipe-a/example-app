<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa</title>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <style>
        body {
            font-family: sans-serif;
        }

        button {
            background: #6c6cff;
            padding: 8px 16px;
            border: 0;
            border-radius: 4px;
            color: white;
            font-weight: bold;
        }

        #my-text {
            font-size: 32px;
            font-weight: bold;
        }
    </style>
    @livewireStyles
</head>

<body>
    {{ $slot }}
    @livewireScripts
</body>

</html>
