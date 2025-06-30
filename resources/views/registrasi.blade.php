<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Registrasi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #e0f7f1;
      font-family: 'Segoe UI', sans-serif;
    }
  </style>
</head>
<body>

  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-md-6 col-lg-4">
      <div class="card shadow-lg rounded-4">
        <div class="card-body p-4">
          <h3 class="text-center mb-3 text-teal">Registrasi Aplikasi</h3>
          <p class="text-muted text-center mb-4">Silahkan isi formulir berikut untuk registrasi</p>
          <form action="{{ route('registrasi.submit') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label class="form-label">Nama Lengkap</label>
              <input type="text" name="name" class="form-control rounded-3" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control rounded-3" required>
            </div>
            <div class="mb-4 position-relative">
              <label class="form-label">Password</label>
              <input id="passwordInput" type="password" name="password" class="form-control rounded-3" required>
              <button type="button"
                      onclick="togglePassword()"
                      style="position: absolute; top: 38px; right: 10px; border: none; background: transparent;">
                👁️
              </button>
            </div>            
            <button type="submit" class="btn btn-teal w-100 rounded-3">Submit Registrasi</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Custom warna teal -->
  <style>
    .btn-teal {
      background-color: #009688;
      color: white;
    }
    .btn-teal:hover {
      background-color: #00796b;
      color: white;
    }
    .text-teal {
      color: #00796b;
    }
  </style>
  <script>
    function togglePassword() {
      const input = document.getElementById('passwordInput');
      input.type = input.type === "password" ? "text" : "password";
    }
  </script>
</body>
</html>
