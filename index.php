<!DOCTYPE html>
<html lang="hr">
<head>
    <title>C</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
        margin: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            text-align: center;
        }
    </style>

</head>
<body>
    <h1>Izračunaj vrijednost C</h1>
    <form method="post" action="">
        <label for="a">Upišite vrijednost A:</label>
        <input type="number" id="a" name="a" required>
        <br><br>
        <label for="b">Upišite vrijednost B:</label>
        <input type="number" id="b" name="b" required>
        <br><br>
        <input type="submit" value="Pošalji">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $a = $_POST['a'];
        $b = $_POST['b'];

        $c = (3 * $a * $b) / 2;

        echo "<h2>C je: " . $c . "</h2>";
    }
    ?>
</body>
</html>
