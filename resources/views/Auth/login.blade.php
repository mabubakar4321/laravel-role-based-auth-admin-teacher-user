<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Modern Form</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #ff512f, #dd2476);
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      padding: 20px;
      color: #333;
    }

    .container {
      background: #fff;
      padding: 40px 30px;
      border-radius: 15px;
      width: 100%;
      max-width: 450px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
      animation: fadeUp 1s ease;
    }

    .container h2 {
      text-align: center;
      margin-bottom: 25px;
      font-size: 2rem;
      color: #222;
    }

    .form-row {
      display: flex;
      flex-direction: column;
      gap: 15px;
      margin-bottom: 20px;
    }

    .form-row input {
      padding: 12px 15px;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 1rem;
      outline: none;
      transition: 0.3s;
    }

    .form-row input:focus {
      border-color: #dd2476;
      box-shadow: 0 0 8px rgba(221, 36, 118, 0.3);
    }

    .btn-primary {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 8px;
      background: linear-gradient(90deg, #ff512f, #dd2476);
      color: white;
      font-size: 1.1rem;
      font-weight: bold;
      cursor: pointer;
      transition: transform 0.2s;
      margin-top: 10px;
    }

    .btn-primary:hover {
      transform: scale(1.05);
    }

    .register-link {
      display: block;
      text-align: center;
      margin-top: 15px;
      font-size: 0.95rem;
    }

    .register-link a {
      text-decoration: none;
      color: #dd2476;
      font-weight: bold;
    }

    .register-link a:hover {
      text-decoration: underline;
    }

    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="form-row">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
      </div>
      <button type="submit" class="btn-primary">Login</button>
    </form>
    <div class="register-link">
      Don’t have an account? <a href="{{route('show.register')}}">Register</a>
    </div>
  </div>
</body>
</html>
