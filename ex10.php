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
        if ($number <2){
            echo "invalid input";
            exit();
        }
        $f=0;
        $n=1;
        echo "Fibonacci sequence up to $number terms:<br>";
        for ($i = 0; $i < $number; $i++) {
            echo $f. " ";
            $next = $f + $n;
            $f = $n;
            $n= $next;
        }
    }
    ?>
</body>
</html>