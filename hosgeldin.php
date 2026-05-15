<?php
$user = isset($_GET["user"]) ? htmlspecialchars($_GET["user"]) : "Kullanıcı";
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoşgeldiniz | Ahmed Abdulhalaf</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">

            <a class="navbar-brand" href="index.html">
                Ahmed Abdulhalaf
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavWelcome">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavWelcome">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Hakkında</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="cv.html">Özgeçmiş</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="sehrim.html">Şehrim</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="ilgi-alanlarim.html">İlgi Alanlarım</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="iletisim.php">İletişim</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="login.php">Login</a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>
</header>

<main class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-7">

            <div class="card shadow border-0 text-center">

                <div class="card-body p-5">

                    <h1 class="text-success fw-bold mb-3">
                        Giriş Başarılı
                    </h1>

                    <h3>
                        Hoşgeldiniz <?php echo $user; ?>
                    </h3>

                    <p class="text-muted mt-3">
                        Sisteme başarıyla giriş yaptınız.
                        5 saniye içinde ana sayfaya yönlendirileceksiniz.
                    </p>

                    <a href="index.html" class="btn btn-primary mt-3">
                        Ana Sayfaya Dön
                    </a>

                </div>

            </div>

        </div>

    </div>

</main>

<footer class="py-4 mt-5 bg-dark text-white text-center">
    <p class="m-0 small">
        © 2026 Ahmed Abdulhalaf
    </p>
</footer>

<script>
setTimeout(function () {
    window.location.href = "index.html";
}, 5000);
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>