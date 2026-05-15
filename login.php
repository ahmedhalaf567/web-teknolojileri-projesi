<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap | Ahmed Abdulhalaf</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">Ahmed Abdulhalaf</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Hakkında</a></li>
                    <li class="nav-item"><a class="nav-link" href="cv.html">Özgeçmiş</a></li>
                    <li class="nav-item"><a class="nav-link" href="sehrim.html">Şehrim</a></li>
                    <li class="nav-item"><a class="nav-link" href="mirasimiz.html">Mirasımız</a></li>
                    <li class="nav-item"><a class="nav-link" href="ilgi-alanlarim.html">İlgi Alanlarım</a></li>
                    <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link active btn btn-primary text-white ms-lg-2" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <h3 class="text-center mb-4">Kullanıcı Girişi</h3>

                    <?php if(isset($_GET['hata'])): ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            if($_GET['hata'] == "bos") {
                                echo "Lütfen tüm alanları doldurunuz!";
                            } else {
                                echo "Kullanıcı adı veya şifre hatalı!";
                            }
                            ?>
                        </div>
                    <?php endif; ?>

                    <form action="login_kontrol.php" method="POST" onsubmit="return loginKontrol()">
                        <div class="mb-3">
                            <label class="form-label fw-bold">E-posta</label>
                            <input type="text" name="email" class="form-control" placeholder="b251210559@sakarya.edu.tr">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Şifre</label>
                            <input type="password" name="password" class="form-control" placeholder="Öğrenci numaranız">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Giriş Yap</button>
                        </div>
                    </form>

                    <p class="small text-muted mt-3 text-center">
                        Kullanıcı adı öğrenci maili, şifre ise öğrenci numarası olmalıdır.
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>

<footer class="py-4 mt-5 bg-dark text-white text-center">
    <p class="m-0 small">© 2026 Ahmed Abdulhalaf</p>
</footer>

<script>
function loginKontrol() {
    const email = document.querySelector('input[name="email"]').value.trim();
    const password = document.querySelector('input[name="password"]').value.trim();

    const mailKontrol = /^[a-zA-Z][0-9]{9}@sakarya\.edu\.tr$/;

    if (email === "" || password === "") {
        alert("Lütfen tüm alanları doldurunuz.");
        return false;
    }

    if (!mailKontrol.test(email)) {
        alert("E-posta formatı hatalı. Örnek: b251210559@sakarya.edu.tr");
        return false;
    }

    if (password === "") {
        alert("Şifre boş bırakılamaz.");
        return false;
    }

    return true;
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>