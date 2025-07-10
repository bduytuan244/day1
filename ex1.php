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
            <label for="number">Number:</label>
            <input name="number" id="number" required />
        </div>
        <div>
            <input type="submit" name="btnSend" value="Send">
        </div>
    </form>
    <?php
    if (isset($_POST['btnSend'])) {
        $number = $_POST['number'];
        if ($number %2 == 0 )
            echo "<p>The number $number is even</p>";
        else 
            echo "<p>The number $number is odd</p>";
    }
    ?>
</body>
</html>