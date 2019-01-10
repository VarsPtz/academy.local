<pre>
    <?
       $listOfQuestions = ['Сколько часов в день Вы тратите на программирование?', 'Какие Ваши любимые фильмы?', 'Любите ли Вы спорт?'];
       print_r($listOfQuestions);
    ?>
</pre>

<?
    $book1 = 'Пикник на обочине';
    $book2 = 'Волны гасят ветер';
    $book3 = 'Град обреченный';
    $book4 = 'Гадкие лебеди';
    $book5 = 'Generation П';
    echo " <br/>";
    echo "Мои любимые книги:<br/>";
    for ($x = 1; $x <= 5; $x++) {
        $outputNameBook = "book".$x;
        echo $$outputNameBook;
        echo "<br/>";
    }
?>