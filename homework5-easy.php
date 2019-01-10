<?
$cols = 10;
$rows = 10;
$tr = 1;
$num1 = 1;

echo "---- Таблица умножения ----<br/>";
echo "<table border='1'>" ;

while ($tr <= $rows){
    echo "<tr>" ;
    $td = 1;
    while ($td <= $cols){
        echo "<td>" . $tr * $td . "</td>";
        $td++;
    }
    echo "</tr>";
    $tr++;
}
echo "</table>" ;

echo "<br/>";
echo  "Квадраты чисел: <br/>";

while (true) {
    $sqr1 =  pow($num1, 2);
    if ($sqr1 > 100) {
        goto end;
    }
    echo "$sqr1<br/>";
    $num1++;
}
end:
echo 'Цикл завершён, ваше величество!';
?>