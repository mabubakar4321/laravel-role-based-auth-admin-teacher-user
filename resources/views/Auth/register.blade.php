<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | Modern Form</title>
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
      max-width: 700px;
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
      gap: 15px;
      margin-bottom: 15px;
    }

    .form-row input, .form-row select {
      flex: 1;
      padding: 12px 15px;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 1rem;
      outline: none;
      transition: 0.3s;
    }

    .form-row input:focus, .form-row select:focus {
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

    .login-link {
      display: block;
      text-align: center;
      margin-top: 15px;
      font-size: 0.95rem;
    }

    .login-link a {
      text-decoration: none;
      color: #dd2476;
      font-weight: bold;
    }

    .login-link a:hover {
      text-decoration: underline;
    }

    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* Responsive Fixes */
    @media (max-width: 768px) {
      .form-row {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Register</h2>
    <form method="POST" action="{{ route('register') }}">
      @csrf
      <div class="form-row">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
      </div>
      <div class="form-row">
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
      </div>
      {{-- <div class="form-row">
        <select name="role" required>
          <option value="" disabled selected>Select Role</option>
          <option value="user">User</option>
          <option value="teacher">Teacher</option>
          <option value="admin">Admin</option>
        </select>
      </div> --}}
      <button type="submit" class="btn-primary">Register</button>
    </form>
    <div class="login-link">
      Already have an account? <a href="{{ route('show.login') }}">Login</a>
    </div>
  </div>
</body>
</html>
