<!--2.Создать массив из дней недели. С помощью цикла foreach выведите все дни недели,
//а текущий день выведите жирным. Текущий день можно получить с помощью функции date.
 Название дней выводить по-русски.-->
<?php $num = 800;
while ($num > 50) {
    $num = $num / 2;
    $num_count++;
//    var_dump($num_count);
//    var_dump($num);
}
var_dump('потребовалось '.$num_count.' интеграции');
unset($num_count, $num);


//1.2
for ($num = 800; $num > 50; $num /= 2){
    $num_count++;

}
var_dump('потребовалось '.$num_count.' интеграции');
unset($num_count, $num);

