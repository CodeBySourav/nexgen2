<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans">

    @include('admin.partials.header')

    <div class="flex pt-16">
        @include('admin.partials.sidebar')

        <main class="flex-1 md:ml-64 p-8 min-h-screen">
            @yield('content')
        </main>
    </div>

</body>
</html>