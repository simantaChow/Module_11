<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Module-11</title>
</head>
<body class="bg-gray-300">
<div class="bg-gray-100 h-[900px] w-[1280px] m-auto">
    <h1 class="font-bold text-3xl text-center">Module-11 Assignment</h1>

    @yield('content')
    @yield('card')
    @yield('create_new_product')
    @yield('product_list')
    @yield('update_product')

</div>


</body>
</html>
