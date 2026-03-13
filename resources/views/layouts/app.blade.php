<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>@yield('title','Martial Arts')</title>
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<!-- Tailwind CSS CDN -->
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body class="min-h-screen bg-background">

@include('partials.header')

<main >
@yield('content')
</main>
<script src="{{ asset('assets/js/chart.js') }}"></script>

</body>
</html>