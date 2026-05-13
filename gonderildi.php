<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Gönderildi | Ahmet Abdulhalaf</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
    <div class="container bg-white p-5 rounded shadow">
        <h2 class="text-primary mb-4">Gönderilen Form Verileri</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-dark"><tr><th>Alan</th><th>Veri</th></tr></thead>
            <tbody>
                <?php
                if ($_POST) {
                    foreach ($_POST as $key => $value) {
                        echo "<tr><td><b>" . ucfirst($key) . "</b></td><td>" . htmlspecialchars($value) . "</td></tr>";
                    }
                }
                ?>
            </tbody>
        </table>
        <a href="index.html" class="btn btn-primary mt-3">Ana Sayfaya Dön</a>
    </div>
</body>
</html>