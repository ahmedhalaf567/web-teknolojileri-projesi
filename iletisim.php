<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim | Ahmet Abdulhalaf</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body class="bg-light">

    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">WebProje</a>
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
                    <li class="nav-item"><a class="nav-link btn btn-primary text-white ms-lg-2" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

    <main id="app" class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 bg-white p-5 rounded shadow-sm">
                <h2 class="fw-bold mb-4 text-center text-primary border-bottom pb-3">İletişim Formu</h2>
                
                <form id="contactForm" action="gonderildi.php" method="POST">
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Adınız</label>
                            <input type="text" name="ad" class="form-control" id="firstName" v-model="ad" placeholder="Ahmet">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Soyadınız</label>
                            <input type="text" name="soyad" class="form-control" id="lastName" placeholder="Abdulhalaf">
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label fw-bold">E-posta</label>
                            <input type="text" name="email" class="form-control" id="email" v-model="email">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Telefon</label>
                            <input type="text" name="tel" class="form-control" id="phone">
                        </div>
                    </div>
                    
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label d-block fw-bold">Cinsiyet</label>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="cinsiyet" value="Erkek" checked> Erkek</div>
                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="cinsiyet" value="Kadın"> Kadın</div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Konu</label>
                            <select name="konu" class="form-select">
                                <option value="Öneri">Öneri</option>
                                <option value="Şikayet">Şikayet</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Mesajınız</label>
                        <textarea name="mesaj" class="form-control" id="message" rows="4"></textarea>
                    </div>

                    <div class="mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="onay" id="terms">
                            <label class="form-check-label small">Bilgilerimin doğruluğunu onaylıyorum.</label>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col-md-6">
                            <button type="button" onclick="validateNative()" class="btn btn-secondary w-100">Native JS Denetle</button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" @click="validateVue" class="btn btn-primary w-100">Vue.js Denetle</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script>
        function validateNative() {
            const ad = document.getElementById('firstName').value;
            const email = document.getElementById('email').value;
            if (ad === "" || !email.includes("@")) {
                alert("Native JS: Lütfen alanları kontrol edin!");
            } else {
                document.getElementById('contactForm').submit();
            }
        }

        const { createApp } = Vue;
        createApp({
            data() { return { ad: '', email: '' } },
            methods: {
                validateVue() {
                    if (this.ad.length < 2) {
                        alert("Vue.js: Ad çok kısa!");
                    } else {
                        document.getElementById('contactForm').submit();
                    }
                }
            }
        }).mount('#app');
    </script>
</body>
</html>