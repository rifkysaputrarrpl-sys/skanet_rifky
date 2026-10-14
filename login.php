<?php
session_start();
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | SchoolX</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;

            display: flex;
            justify-content: center;
            align-items: center;

            background:
                radial-gradient(circle at 10% 20%, #4d0000 0%, transparent 30%),
                radial-gradient(circle at 90% 80%, #ff0000 0%, transparent 20%),
                #050505;

            color: white;
            overflow: hidden;
        }

        /* Background Glow */

        body::before {
            content: "";
            position: fixed;

            width: 350px;
            height: 350px;

            background: #ff0000;
            filter: blur(150px);

            opacity: .18;

            top: -100px;
            left: -100px;

            z-index: -1;
        }

        body::after {
            content: "";
            position: fixed;

            width: 300px;
            height: 300px;

            background: #ff0000;
            filter: blur(150px);

            opacity: .15;

            bottom: -100px;
            right: -100px;

            z-index: -1;
        }

        /* Login Card */

        .login-card {
            width: 400px;

            background: rgba(15, 15, 15, .88);

            border: 1px solid rgba(255, 0, 0, .25);

            border-radius: 28px;

            box-shadow:
                0 25px 70px rgba(0,0,0,.7),
                0 0 40px rgba(255,0,0,.08);

            backdrop-filter: blur(20px);

            overflow: hidden;

            animation: muncul .7s ease;
        }

        @keyframes muncul {

            from {
                opacity: 0;
                transform: translateY(30px) scale(.95);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }

        }

        /* Red Top Line */

        .login-card::before {
            content: "";

            display: block;

            height: 4px;

            background: #ff0000;

            box-shadow: 0 0 20px #ff0000;
        }

        /* Header */

        .card-header {
            background: transparent;
            border: none;

            text-align: center;

            padding: 35px 30px 15px;
        }

        .logo {
            width: 80px;
            height: 80px;

            margin: auto;
            margin-bottom: 20px;

            border-radius: 23px;

            display: flex;
            justify-content: center;
            align-items: center;

            background: rgba(255,0,0,.12);

            border: 1px solid rgba(255,0,0,.35);

            box-shadow:
                0 0 30px rgba(255,0,0,.15);

            transition: .3s;
        }

        .logo i {
            font-size: 40px;
            color: #ff1f1f;

            text-shadow:
                0 0 20px rgba(255,0,0,.7);
        }

        .login-card:hover .logo {
            transform: scale(1.05) rotate(-3deg);

            background: #ff0000;

            box-shadow:
                0 0 35px rgba(255,0,0,.5);
        }

        .login-card:hover .logo i {
            color: white;
        }

        .card-header h3 {
            font-size: 30px;
            font-weight: 800;
            margin-bottom: 5px;
        }

        .card-header h3 span {
            color: #ff1f1f;

            text-shadow:
                0 0 15px rgba(255,0,0,.5);
        }

        .card-header p {
            color: #777 !important;
            font-size: 13px;
        }

        /* Form */

        .card-body {
            padding: 20px 35px 35px;
        }

        .form-label {
            color: #ddd;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .input-box {
            position: relative;
        }

        .input-box i {
            position: absolute;

            left: 16px;
            top: 50%;

            transform: translateY(-50%);

            color: #777;

            transition: .3s;

            z-index: 2;
        }

        .form-control {
            height: 52px;

            border-radius: 14px;

            padding-left: 45px;

            background: #101010;

            border: 1px solid #292929;

            color: white;

            font-size: 14px;

            transition: .3s;
        }

        .form-control::placeholder {
            color: #555;
        }

        .form-control:focus {
            background: #111;

            color: white;

            border-color: #ff1f1f;

            box-shadow:
                0 0 0 3px rgba(255,0,0,.1),
                0 0 20px rgba(255,0,0,.08);
        }

        .input-box:focus-within i {
            color: #ff1f1f;
        }

        /* Button */

        .btn-login {
            height: 52px;

            border: none;

            border-radius: 14px;

            background: #e60000;

            color: white;

            font-weight: 700;

            font-size: 15px;

            transition: .3s;

            box-shadow:
                0 8px 20px rgba(255,0,0,.2);
        }

        .btn-login:hover {
            background: #ff0000;

            transform: translateY(-3px);

            box-shadow:
                0 12px 30px rgba(255,0,0,.4);
        }

        .btn-login:active {
            transform: scale(.98);
        }

        .btn-login i {
            margin-right: 8px;
        }

        /* Alert */

        .alert {
            border-radius: 12px;

            background: rgba(220,53,69,.12);

            border: 1px solid rgba(220,53,69,.3);

            color: #ff6b6b;

            font-size: 13px;
        }

        /* Footer */

        .footer {
            text-align: center;

            margin-top: 25px;

            color: #555;

            font-size: 11px;
        }

        .footer span {
            color: #ff1f1f;
        }

        /* Mobile */

        @media(max-width: 500px) {

            body {
                padding: 20px;
            }

            .login-card {
                width: 100%;
            }

            .card-body {
                padding: 20px 25px 30px;
            }

        }

    </style>

</head>

<body>

<div class="card login-card">

    <!-- HEADER -->

    <div class="card-header">

        <div class="logo">
            <i class="bi bi-shield-lock-fill"></i>
        </div>

        <h3>
            SCHOOL<span>X</span>
        </h3>

        <p>
            Sistem Informasi Sekolah
        </p>

    </div>


    <!-- BODY -->

    <div class="card-body">

        <form method="post">

            <!-- Username -->

            <div class="mb-4">

                <label class="form-label">
                    Username
                </label>

                <div class="input-box">

                    <i class="bi bi-person-fill"></i>

                    <input
                        type="text"
                        name="username"
                        class="form-control"
                        placeholder="Masukkan username"
                        autocomplete="username"
                        required
                    >

                </div>

            </div>


            <!-- Password -->

            <div class="mb-4">

                <label class="form-label">
                    Password
                </label>

                <div class="input-box">

                    <i class="bi bi-lock-fill"></i>

                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="Masukkan password"
                        autocomplete="current-password"
                        required
                    >

                </div>

            </div>


            <!-- Login Button -->

            <div class="d-grid">

                <button
                    type="submit"
                    class="btn btn-login"
                    name="login"
                >

                    <i class="bi bi-box-arrow-in-right"></i>

                    LOGIN SEKARANG

                </button>

            </div>

        </form>


        <?php

        if(isset($_POST['login'])){

            $username = $_POST['username'];
            $password = $_POST['password'];

            $query = mysqli_query(
                $koneksi,
                "SELECT * FROM users 
                 WHERE username='$username' 
                 AND password='$password'"
            );

            if(mysqli_num_rows($query) > 0){

                $_SESSION['status'] = "sukses";
                $_SESSION['username'] = $username;

                echo "
                <script>
                    alert('Login Berhasil');
                    window.location='index.php';
                </script>
                ";

            } else {

                echo "
                <div class='alert mt-4'>
                    <i class='bi bi-exclamation-triangle-fill'></i>
                    Username atau Password salah!
                </div>
                ";

            }

        }

        ?>


        <div class="footer">

            © 2026 <span>SCHOOLX</span> · Admin System

        </div>

    </div>

</div>

</body>
</html>