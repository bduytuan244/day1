<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <label for="C">Celsius:</label>
            <input name="C" id="C" required />
        </div>
        <div>
            <input type="submit" name="btnSend" value="Send">
        </div>
    </form>
    <?php
    if (isset($_POST['btnSend'])) {
        $C = $_POST['C'];
        $F = $C * 1.8 + 32;
        echo "$C celsius = $F fahrenheit";
    }
    ?>
</body>
</html>