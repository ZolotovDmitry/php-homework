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
    case 1:$arr[$thedate - 1] = "<b>Понедельник</b>";break;
    case 2:$arr[$thedate - 1] = "<b>Вторник</b>";break;
    case 3:$arr[$thedate - 1] = "<b>Среда</b>";break;
    case 4:$arr[$thedate - 1] = "<b>Четверг</b>";break;
    case 5:$arr[$thedate - 1] = "<b>Пятница</b>";break;
    case 6:$arr[$thedate - 1] = "<b>Суббота</b>";break;
    case 0:$arr[$thedate - 1] = "<b>Воскресенье</b>";break;
  }
  var_dump($arr);
}
dayB($arr, $thedate);

