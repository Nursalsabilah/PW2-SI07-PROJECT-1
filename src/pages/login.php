<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Login to SB Admin for access to your account.">
    <title>Login Admin</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <style>
        .card {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 450px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-8 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Login Akun</h3>
                        <form method="post" action="" id="loginForm">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="text" name="username" placeholder="Username: admin">
                                <label for="inputEmail">Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Password: 123">
                                <label for="inputPassword">Password</label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="">
                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary" type="submit" name="login">Login</button>
                                <a href="../../index.php" class="btn btn-secondary mt-3">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById("loginForm");

            form.addEventListener("submit", function(event) {
                event.preventDefault();

                const usernameInput = document.getElementById("inputEmail");
                const passwordInput = document.getElementById("inputPassword");

                const username = usernameInput.value.trim();
                const password = passwordInput.value.trim();

                // Validasi username dan password
                if (username === 'admin' && password === '123') {
                    alert("Login berhasil!");
                    window.location.href = "admin.php";
                } else {
                    alert("Username atau password salah!");
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../assets/js/scripts.js"></script>
</body>

</html>