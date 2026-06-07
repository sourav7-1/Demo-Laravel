<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=5.0">
    <title>Document</title>
</head>
<body>
    {{-- -Importing the navbar to the site --}}
    @include('componentes.navbar')
    <h1>Welcome to the Landing Page</h1>
    <p>This is the landing page of our application.</p>
    @yield('section-container')
</body>
</html>