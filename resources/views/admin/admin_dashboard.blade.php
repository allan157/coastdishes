<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Admin Dashboard</h1>

    @if (Session::has('error'))
    <li>{{ Session::get('error')}}</li>

@endif

@if (Session::has('success'))
    <li>{{ Session::get('success')}}</li>

@endif

<!-- Admin Menu -->
<a href="{{ route('admin.logout')}}">Logout </a>
</body>
</html>
