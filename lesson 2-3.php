<!--3.Создать массив из дней недели. С помощью цикла foreach выведите все дни недели,-->
<!--а текущий день выведите жирным. Текущий день можно получить с помощью функции date. Название дней выводить по-русски.-->

<?php
$arr = ["понедельник", "вторник", "среда", "четверг", "пятница", "суббота", "воскресенье"];
//var_dump($arr);
$thedate = date(N);
//var_dump($thedate);
//echo $arr[$thedate - 1];
function dayB($arr, $thedate){
  switch ($thedate) {
    case 1:$arr[$thedate - 1] = "<br>Понедельник</br>";break;
    case 2:$arr[$thedate - 1] = "<br>Вторник</br>";break;
    case 3:$arr[$thedate - 1] = "<br>Среда</br>";break;
    case 4:$arr[$thedate - 1] = "<br>Четверг</br>";break;
    case 5:$arr[$thedate - 1] = "<br>Пятница</br>";break;
    case 6:$arr[$thedate - 1] = "<br>Суббота</br>";break;
    case 0:$arr[$thedate - 1] = "<br>Воскресенье</br>";break;
  }
  var_dump($arr);
  return;
}
dayB($arr, $thedate);

