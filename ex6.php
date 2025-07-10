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
            <label for="numbers">length of 3 side a, b, c:</label>
            <input name="numbers" id="numbers" required />
        </div>
        <div>
            <input type="submit" name="btnSend" value="Send">
        </div>
    </form>
    <?php
    if (isset($_POST['btnSend'])) {
        $numbers = $_POST['numbers'];
        $e=0;
        $nums = array_map('floatval', explode(",", $numbers));
        if (count($nums) <3) {
            echo "invalid input";
            exit();
        }
        for ($i = 0; $i <= count($nums); $i++){
            if ($nums[0] < 0) {
                echo "invalid input";
                $e=1;
                exit();
            }
            if ($nums[1] < 0) {
                echo "invalid input";
                $e=1;
                exit();
            }
            if ($nums[2] < 0) {
                echo "invalid input";
                $e=1;
                exit();
            }        
        }
        if ($e == 0) {
            $p = $nums[0] + $nums[1] + $nums[2];
            echo "the perimter of the triangle is: $p";
        }
    }
    ?>
</body>
</html>