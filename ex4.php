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
            <label for="number">number:</label>
            <input name="number" id="number" required />
        </div>
        <div>
            <input type="submit" name="btnSend" value="Send">
        </div>
    </form>
    <?php
    if (isset($_POST['btnSend'])) {
        $number = $_POST['number'];
        $T =0;
        for ($i = 1; $i <= $number; $i++) {
            if ($number % i == 0)
                $T = $T+1;
        }
        if ($T >2)
            echo "Not prime";
        else    
            echo "Prime";    
    }
    ?>
</body>
</html>