<pre>
    <?
        function checkLeapYear($year) {
            if ($year % 100 != 0 && $year % 4 == 0 or $year % 400 == 0) {
                return true;
            }
            //if ($year % 100 == 0 && $year % 4 != 0 or $year % 400 != 0) {
            //   return false;
            //}
            return false;
        }

        echo "<br/>";
        echo '1996 високосный год? ';
        var_dump(checkLeapYear(1996));
        echo "<br/>";
        echo '2017 високосный год? ';
        var_dump(checkLeapYear(2017));
    ?>
</pre>

