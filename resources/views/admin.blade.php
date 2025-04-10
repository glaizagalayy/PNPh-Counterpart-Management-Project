<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <title>Admin Dashboard</title>
</head>
<body>
    <header class="header">
        <div class="logo-container">
        <img src="{{ asset('image/pnlogo.png') }}" alt="Logo"class="logo">
        </div>
        <div class="title-container">
            <h1 class="title">Finance Dashboard</h1>
        </div>
    </header>
    <div class="sidebar">
        <div class="navigation">
            <h3>Dashboard</h3>
        </div>
        <div class="navigation">
            <h3>Payments</h3>
        </div>
        <div class="navigation">
            <h3>Reports</h3>
        </div>
    </div>
</body>

</html>