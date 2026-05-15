<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim | Ahmed Abdulhalaf</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-light">

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
                <li class="nav-item"><a class="nav-link active" href="iletisim.php">İletişim</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="login.php">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<main class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8 bg-white p-5 rounded shadow-sm">

            <h2 class="fw-bold mb-4 text-center text-primary border-bottom pb-3">İletişim Formu</h2>

            <form id="contactForm" action="gonderildi.php" method="POST" autocomplete="off">

                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Adınız</label>
                        <input type="text" name="ad" class="form-control" id="firstName" autocomplete="new-password">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-bold">Soyadınız</label>
                        <input type="text" name="soyad" class="form-control" id="lastName" autocomplete="new-password">
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">E-posta</label>
                        <input type="text" name="email" class="form-control" id="email" autocomplete="new-password">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-bold">Telefon</label>
                        <input type="text" name="tel" class="form-control" id="phone" autocomplete="new-password">
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label d-block fw-bold">Cinsiyet</label>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cinsiyet" value="Erkek" checked>
                            <label class="form-check-label">Erkek</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cinsiyet" value="Kadın">
                            <label class="form-check-label">Kadın</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-bold">Konu</label>
                        <select name="konu" class="form-select">
                            <option value="">Konu seçiniz</option>
                            <option value="Öneri">Öneri</option>
                            <option value="Şikayet">Şikayet</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Mesajınız</label>
                    <textarea name="mesaj" class="form-control" id="message" rows="4" autocomplete="new-password"></textarea>
                </div>

                <div class="mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="onay" id="terms" value="Onaylandı">
                        <label class="form-check-label small" for="terms">
                            Bilgilerimin doğruluğunu onaylıyorum.
                        </label>
                    </div>
                </div>

                <div class="row g-3">
                    <div class="col-6">
                        <button type="button" onclick="validateNative()" class="btn btn-secondary w-100">
                            Native JS Denetle
                        </button>
                    </div>

                    <div class="col-6">
                        <button type="button" onclick="validateVue()" class="btn btn-primary w-100">
                            Vue.js Denetle
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</main>

<script>
    window.onload = function () {
        document.getElementById("contactForm").reset();
    };

    function formKontrol() {
        const ad = document.getElementById("firstName").value.trim();
        const soyad = document.getElementById("lastName").value.trim();
        const email = document.getElementById("email").value.trim();
        const telefon = document.getElementById("phone").value.trim();
        const konu = document.querySelector("select[name='konu']").value;
        const mesaj = document.getElementById("message").value.trim();
        const onay = document.getElementById("terms").checked;

        if (ad.length < 2) {
            alert("Ad alanı en az 2 karakter olmalıdır!");
            return false;
        }

        if (soyad.length < 2) {
            alert("Soyad alanı en az 2 karakter olmalıdır!");
            return false;
        }

        if (email === "" || !email.includes("@") || !email.includes(".")) {
            alert("Geçerli bir e-posta adresi giriniz!");
            return false;
        }

        const telefonKontrol = /^[0-9]{10,11}$/;

        if (!telefonKontrol.test(telefon)) {
            alert("Geçerli bir telephone numarası giriniz! Sadece 10 veya 11 rakam olmalıdır.");
            return false;
        }

        if (konu === "") {
            alert("Lütfen konu seçiniz!");
            return false;
        }

        if (mesaj.length < 5) {
            alert("Mesaj alanı en az 5 karakter olmalıdır!");
            return false;
        }

        if (!onay) {
            alert("Bilgilerin doğruluğunu onaylamalısınız!");
            return false;
        }

        document.getElementById("contactForm").submit();
    }

    function validateNative() {
        formKontrol();
    }

    function validateVue() {
        formKontrol();
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>