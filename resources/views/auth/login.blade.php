<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - FruitStock</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

<div class="login-container">

    <div class="login-card">

        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="FruitStock Logo">
        </div>

        <h2>FruitStock</h2>
        <p>Sistem Manajemen Stok Gudang Buah</p>

        <form>

            <div class="form-group">

                <label>Email</label>

                <input
                    type="email"
                    name="email"
                    placeholder="Masukkan Email">

            </div>

            <div class="form-group">

                <label>Password</label>

                <input
                    type="password"
                    name="password"
                    placeholder="Masukkan Password">

            </div>

            <button type="button">
                Login
            </button>

        </form>

        <div class="register-link">
            Belum punya akun?
            <a href="#">Daftar</a>
        </div>

    </div>

</div>

</body>
</html>