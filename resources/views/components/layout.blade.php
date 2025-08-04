<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks List</title>
    @vite(['resources/css/app.css', "resources/js/app.js"])
    <script src="//unpkg.com/alpinejs" defer></script>

</head>
<body class="container mx-auto mt-10 mb-10 max-w-lg">
    {{$slot}}
</body>
</html>
