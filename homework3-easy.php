<pre>

    <?
        $a = 10;
        $b = 2;

        echo 'Операторы:';
        echo "<br/>";
        echo 10 - 2;
        echo "<br/>";
        echo 10 + $b;
        echo "<br/>";
        echo $a / 2;
        echo "<br/>";
        echo $a * $b;
        echo "<br/>";
        echo $a % $b;
        echo "<br/>";

        function expres($x, $y, $a, $b, $c) {
            $y = ((2 * $x) / (3 * $y) + (4 * $a * 0.5 * $b) - ((3 * $c) - (2 * $x)) / (5 * $y));
            return $y;
        }

        echo expres(10, 2, 3, 1, 4);

        function newFunction($a, $b, $c = 100) {
            $sum1 = $a + $b;
            $sub1 = $a - $b;
            $res1 = $sum1 / $sub1;
            $res2 = $res1 * $c;
            $newArray = [1 => $sum1, 2 => $sub1, 3 => $res1, 4 => $res2];
            return $newArray;
        }

        echo "<br/>";
        var_dump(newFunction(10, 2));
    ?>
</pre>

