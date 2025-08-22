<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #185a9d, #43cea2);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #fff;
            margin: 0;
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 2px 4px 8px rgba(0,0,0,0.3);
        }

        a {
            display: inline-block;
            text-decoration: none;
            background: linear-gradient(90deg, #ff7e5f, #feb47b);
            color: #fff;
            padding: 12px 30px;
            font-size: 1.1rem;
            font-weight: bold;
            border-radius: 30px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            transition: 0.3s;
        }

        a:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
            opacity: 0.95;
        }
    </style>
</head>
<body>
    <h1>Student & User</h1>
    <a href="{{ route('logout') }}">Logout</a>
</body>
</html>
