<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Livewire with - Tailwind Css</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    @vite('resources/css/app.css')
    @livewireStyles
    @livewireScripts
</head>

<body>


</body>

<body class="flex justify-center">
    <div class="w-10/12 my-10 flex">
        {{-- <div class="w-5/12 rounded border p-2">
            <livewire:tickets />
        </div> --}}
        <div class="w-7/12 rouned border p-2 mx-auto mt-3">
            @livewire('comments')
        </div>
    </div>

</body>

</html>
