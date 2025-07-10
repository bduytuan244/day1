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
            <label for="numbers">String:</label>
            <input name="numbers" id="numbers" required />
        </div>
        <div>
            <input type="submit" name="btnSend" value="Send">
        </div>
    </form>
    <?php
    if (isset($_POST['btnSend'])) {
        $input = $_POST['numbers'];
        $input = strtolower($input); 
        $vowelCount = 0;

        for ($i = 0; $i < strlen($input); $i++) {
            if (in_array($input[$i], ['a', 'e', 'i', 'o', 'u'])) {
                $vowelCount++;
            }
        }

        if ($vowelCount > 0) {
            echo "Number of vowels: $vowelCount";
        } else {
            echo "There are no vowels.";
        }
    }
?>
</body>
</html>