<!--1.Дано число $num=800. Делите его на 2 столько раз, пока результат деления не станет меньше 50. -->
<!--Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла).-->
<!--Решите задачу сначала через цикл while, а потом через цикл for-->
<?php $num = 800;
while ($num > 50 ) {
    $num = $num / 2;
    $num_count++;
//    var_dump($num_count);
//    var_dump($num);
}
var_dump('потребовалось '.$num_count.' интеграции');

