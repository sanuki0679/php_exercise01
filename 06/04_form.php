<html>

<head>
    <title>calculator</title>
    <meta charset="UTF-8">
</head>

<body>

    <form action="" method="get">


        <label for="num1"></label>
        <input type="text" name="num1"><br>
        <label for="num2"></label>
        <input type="text" name="num2"><br>
        <input type="text" name="operator">addition subtraction multiplication division<br>

        <input type="submit" value="結果"><br>

        <?php

        $num1 = filter_input(INPUT_GET, 'num1');
        $num2 = filter_input(INPUT_GET, 'num2');
        $operator = filter_input(INPUT_GET, 'operator');


        if ($operator === "addition") {
            $add = $num1 + $num2;
            echo $num1 . '+' . $num2 . '=' . $add;
        } else if ($operator === "subtraction") {
            $sub = $num1 - $num2;
            echo $num1 . '-' . $num2 . '=' . $sub;
        } else if ($operator === "multiplication") {
            $mul = $num1 * $num2;
            echo $num1 . '*' . $num2 . '=' . $mul;
        } else if ($operator === "division") {
            if ($num2 == 0) {
                echo ("0での割り算はできません");
            } else {
                $div = $num1 / $num2;
                echo $num1 . '/' . $num2 . '=' . $div;
            }
        } else if ($operator != '') {
            echo '正しい演算子を指定してください';
        }
        ?>
    </form>
</body>

</html>
