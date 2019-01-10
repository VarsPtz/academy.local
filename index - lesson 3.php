<pre>
    <h3>Курс PHP-Разработчик</h3>
    <?
       $part = 'Операторы';
       echo $part;
       echo "<br/>";
       $a =  10;
       $b = 5;
       /*
        * Математические операторы
        */
       echo $a + $b;
       echo "<br/>";
       echo $a - $b;
       echo "<br/>";
       echo $a * $b;
       echo "<br/>";
       echo $a / $b;
       echo "<br/>";
       echo $b % $a; //Остаток от деления
       echo "<br/>";

       echo ++$a;
       echo "<br/>";
       echo $a++;
       echo "<br/>";
       echo $a;
       echo "<br/>";
       echo --$a;
       echo "<br/>";
       echo $a--;
       echo "<br/>";
       echo $a;
       echo "<br/>";

       $c = $a > $b;
       $d = $a < $b;
       $c = $a <= $b;
       $e = $a == $b;
       $f = $a != $b;
       $g = $a === $b;
       var_dump($c);
       echo "<br/>";
       var_dump($d);
       echo "<br/>";
       var_dump($e); // 10 = '10' true
       echo "<br/>";
       var_dump($f);
       echo "<br/>";
       var_dump($g); // 10 = 10 true, but 10 = '10' false
       echo "<br/>";

       //Строковые операторы
        $str = 'Log: this is academy';
        $str2 = $str . ' and this ia php-developer course.';
        var_dump($str2);
        echo "<br/>";
        $str .= ' and this ia php-developer course with one action.';
        var_dump($str);
        echo "<br/>";

        //Константы
        define('ACADEMY', 'PHP-developer'); //Определяем константу ACADEMY
        define('PATH', __DIR__); //Текущая директория

        echo ACADEMY;
        echo "<br/>";
        echo PATH;
        echo "<br/>";

        //Функции
        echo 'Функции:';
        echo "<br/>";
        function sum($x, $y) {
            return $x + $y;
        }

        function sum2($x, $y) {
            $x = $x + $y;
            return $x;
        }


        $c = sum($a, $b);
        echo $c;
        echo "<br/>";

        function subtr($x, $y) {
            return $x - $y;
        }
        $d = subtr($a, $b);
        echo $d;
        echo "<br/>";

        function mult($x, $y) {
            return $x * $y;
        }

        function divis($x, $y) {
            return $x / $y;
        }


        function divis2($x, $y = 2) {
            return $x / $y;
        }

        echo mult($a, $b);
        echo "<br/>";
        echo divis($a, $b); // Можно заранее назначить переменные
        //echo divis($a = 10, $b = 2); // Можно заранее назначить переменные
        echo "<br/>";

        //Можно указать один аргумент
        echo divis2(12);
        echo "<br/>";

        //Передача по ссылке. Используется знак & амперсанд
        function sum3(&$x, $y) {
            $x = $x + $y;
        }
        $z = sum3($a, $b);
        echo "<br/>";
        echo $a;// Значение переменной $a изменилось

        //unset($a); - Удаляет переменную a = null

    ?>
</pre>

