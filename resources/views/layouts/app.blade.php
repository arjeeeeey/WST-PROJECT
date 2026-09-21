<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task Manager</title>
    <style>
        /* Basic page + card styling, no framework needed */
        * { box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 0;
            color: #222;
        }
        nav {
            background: #2d3748;
            color: #fff;
            padding: 16px 32px;
            font-size: 20px;
            font-weight: bold;
        }
        .container {
            max-width: 900px;
            margin: 32px auto;
            padding: 0 16px;
        }
        .card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 1px 4px rgba(0,0,0,0.1);
            padding: 24px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            text-align: left;
            padding: 10px 12px;
            border-bottom: 1px solid #e2e8f0;
        }
        th { background: #edf2f7; }
        .btn {
            display: inline-block;
            padding: 6px 14px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 14px;
            border: none;
            cursor: pointer;
        }
        .btn-primary { background: #3182ce; color: #fff; }
        .btn-edit { background: #ecc94b; color: #222; }
        .btn-delete { background: #e53e3e; color: #fff; }
        .btn-status { background: #38a169; color: #fff; }
        .status-pending { color: #dd6b20; font-weight: bold; }
        .status-completed { color: #38a169; font-weight: bold; }
        form.inline { display: inline; }
        input[type=text], textarea, input[type=date], select {
            width: 100%;
            padding: 8px;
            margin-top: 4px;
            margin-bottom: 14px;
            border: 1px solid #cbd5e0;
            border-radius: 4px;
        }
        label { font-weight: bold; font-size: 14px; }
        .alert-success {
            background: #c6f6d5;
            color: #22543d;
            padding: 10px 16px;
            border-radius: 4px;
            margin-bottom: 16px;
        }
    </style>
</head>
<body>
    <nav>Task Manager</nav>
    <div class="container">
        {{-- Flash message shown after add/edit/delete/status actions --}}
        @if (session('success'))
            <div class="alert-success">{{ session('success') }}</div>
        @endif

        {{-- Page-specific content goes here --}}
        @yield('content')
    </div>
</body>
</html>
