<div>
    <h1>Изучаем синтакси PHP:</h1>
    <?php
    echo "Hello, world!";
    ?>
</div>
<?
    echo "Hi!";
    //Это наш комментарий.
    /*
     * Это наш многострочный комментарий
     */
    $a = "Abc";
    echo $a;
    $array = ["Audi", "BMW", "Toyota"];
    $array2 = [0 => "Audi", 1 => "BMW", "Toyota"];
    echo $array[0];
    print_r($array2);
    $associated = ["a" => "Audi", 10 => "BMW", "c" => "Toyota"];
    print_r($associated);
    print_r($associated["a"]);
    print_r($associated[10]);

    $associated2 = ["cars" => ["Audi", "BMW", "Toyota"], "moto" => ["Suzuki", "Yamaha", "Honda"]];
    print_r($associated2);
    print_r($associated2["moto"]);
    print_r($associated2["moto"][0]); //Первый элемент вложенного массива moto
    print_r($associated2["moto"][0][0]); //Первый символ первого элемента вложенного массива moto

    $oldArray = array("Audi", "BMW", "Toyota"); //Устаревший способ записи массива

?>


<?
//Типы данных
   $a = 'String';
   $b = "String $a";
   $c = 10;
   $d = 9.5;
   $e = true;
   $f = false;
   $g = null;
   $h = ['a', 'b', 10];
   echo $b;
   echo $c;
   echo $d;
   echo $e;
   echo $f;
   echo $g;
?>



