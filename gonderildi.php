<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gönderildi | Ahmed Abdulhalaf</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-5">

    <div class="bg-white shadow rounded p-5">

        <h2 class="text-primary text-center mb-4">
            Form Başarıyla Gönderildi
        </h2>

        <?php if($_POST): ?>

        <table class="table table-bordered table-striped">

            <thead class="table-dark">
                <tr>
                    <th>Alan</th>
                    <th>Bilgi</th>
                </tr>
            </thead>

            <tbody>

                <?php
                    foreach($_POST as $key => $value){

                        echo "<tr>";

                        echo "<td><strong>" . htmlspecialchars($key) . "</strong></td>";

                        echo "<td>" . htmlspecialchars($value) . "</td>";

                        echo "</tr>";
                    }
                ?>

            </tbody>

        </table>

        <?php else: ?>

            <div class="alert alert-danger text-center">
                Herhangi bir veri gönderilmedi!
            </div>

        <?php endif; ?>

        <div class="text-center mt-4">
            <a href="iletisim.php" class="btn btn-primary">
                Forma Geri Dön
            </a>
        </div>

    </div>

</div>

</body>
</html>