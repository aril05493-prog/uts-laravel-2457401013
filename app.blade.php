<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Rental Mobil Aril')</title>
    <style>
        *{box-sizing:border-box} body{margin:0;font-family:Arial,sans-serif;background:#f4f6f9;color:#222}
        nav{background:#172554;padding:16px 7%;display:flex;gap:22px;align-items:center}
        nav a{color:white;text-decoration:none;font-weight:bold} nav .brand{margin-right:auto;font-size:18px}
        main{max-width:1100px;margin:32px auto;padding:0 18px;min-height:70vh}
        .card{background:white;padding:24px;border-radius:10px;box-shadow:0 2px 10px #00000010;margin-bottom:20px}
        h1{margin-top:0;color:#172554}.btn{display:inline-block;padding:9px 14px;border:0;border-radius:6px;text-decoration:none;background:#1d4ed8;color:white;cursor:pointer;font-size:14px}
        .btn.gray{background:#64748b}.btn.green{background:#15803d}.btn.red{background:#b91c1c}
        table{width:100%;border-collapse:collapse;background:white} th,td{padding:12px;border-bottom:1px solid #e5e7eb;text-align:left;font-size:14px}
        th{background:#eaf0ff}.alert{padding:12px;border-radius:6px;margin-bottom:16px}.success{background:#dcfce7;color:#166534}
        label{display:block;font-weight:bold;margin:14px 0 6px} input,select,textarea{width:100%;padding:10px;border:1px solid #cbd5e1;border-radius:6px}
        input[type=checkbox]{width:auto}.error{color:#b91c1c;font-size:13px;margin-top:4px}.actions{display:flex;gap:6px;flex-wrap:wrap}
        footer{text-align:center;background:#172554;color:white;padding:18px;margin-top:30px}
        .grid{display:grid;grid-template-columns:1fr 1fr;gap:16px}
        @media(max-width:700px){.grid{grid-template-columns:1fr}nav{flex-wrap:wrap}table{display:block;overflow-x:auto}}
    </style>
</head>
<body>
<nav>
    <a class="brand" href="{{ route('home') }}">Rental Mobil Aril</a>
    <a href="{{ route('home') }}">Beranda</a>
    <a href="{{ route('cars.index') }}">Data Mobil</a>
</nav>
<main>
    @if(session('success'))
        <div class="alert success">{{ session('success') }}</div>
    @endif
    @yield('content')
</main>
<footer>Aril Saputra · 2457401013</footer>
</body>
</html>
