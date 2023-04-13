<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Test Coding</title>
</head>

<form action="" method="post">
    <input class="form-control form-control-sm" name="angka" type="text" placeholder="Input Angka" required>

    <button type="submit" value="segitiga" class="btn btn-primary mt-5">Generate Segitiga</button>
    <button type="submit" name="ganjil" value="ganjil" class="btn btn-primary mt-5">Generate Bilangan Ganjil</button>
    <button type="submit" name="prima" value="prima" class="btn btn-primary mt-5">Generate Bilangan Prima</button>
</form>

<?php
$angka = $_POST['angka'];
if (isset($_POST['ganjil'])) {

    for ($i = 0; $i <= $angka; $i++) {
        if ($i % 2 == 1) {
            echo "$i <br>";
        }
    }
} else if (isset($_POST['prima'])) {
    for ($i = 0; $i <= $angka; $i++) {
        $bil = 0;
        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j == 0) {
                $bil = $bil + 1;
            }
        }
        if ($bil == 2) {
            echo $i . "<br>";
        }
    }
} else {
    for ($i = 0; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "$i";
        }
        echo "<br>";
    }
}
?>

<body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>

</html>