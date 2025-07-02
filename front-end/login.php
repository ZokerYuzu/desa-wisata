<?php
session_start();
$error = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    // Ganti username dan password sesuai kebutuhan
    if ($user === 'admin' && $pass === 'admin123') {
        $_SESSION['admin'] = true;
        header('Location: form-data.php');
        exit;
    } else {
        $error = 'Username atau password salah!';
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin - Desa Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <style>
        body {
            background: #222;
            font-family: 'Poppins', sans-serif;
            background-image: url('img/collage-foto.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
        }
        body::before {
            content: "";
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.6);
            z-index: 0;
            pointer-events: none;
        }
        .login-card, .login-card * {
            position: relative;
            z-index: 1;
        }
        .login-card {
            max-width: 400px;
            margin: 80px auto;
            border-radius: 16px;
            background: rgba(255,255,255,0.18); /* transparan */
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border: 1px solid rgba(255,255,255,0.3);
        }
        .login-card img {
            max-width: 100%;
            height: auto;
        }

    </style>
</head>
<body>
    <div class="container align-items-center d-flex justify-content-center vh-100">
            <div class="card shadow-sm login-card text-white">
       

                
                <div class="card-body">
                    <h4 class="mb-3 text-center "><i class="bi bi-person-circle"></i> Login Admin Desa Wisata</h4>
                    <?php if ($error): ?>
                        <div class="alert alert-danger"><?= $error ?></div>
                        <?php endif; ?>
                        <form method="POST" autocomplete="off">
                            <div class="mb-1">
                                <label class="form-label" ></label>
                                <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" ></label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <button class="btn  w-100" type="submit" style="background-color: #a4b465">Login</button>
                        </form>
                    </div>
                </div>
            </div>
            
        
    </div>
</body>
</html>