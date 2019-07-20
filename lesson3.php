<?php
//1.Дана строка, содержащая полное имя файла (например, 'C:\OpenServer\testsite\www\someFile.txt').Написать функцию, которая сможет выделить из подобной строки имя файла без расширения.
$str = 'C:\OpenServer\testsite\www\someFile.txt';
function getFileName($str){
    //var_dump(strrpos($str, '\\' ));
    //var_dump(strrpos($str, '.' ));
    //var_dump(strrchr($str, '.' ));
    //var_dump(strrchr($str, '\\' ));
    $fileNameArr = explode('\\', strrchr($str, '\\' ));
    //$fileNameArr = explode('.', strrchr($str, '\\' ));
    //var_dump(ltrim(strrchr($str, '\\' )), '\\');
    $fileNameArr = explode('.', $fileNameArr[1]);
    var_dump($fileNameArr[0]);
};
getFileName($str);
//2.Написать функцию - конвертер строки. Возможности (в зависимости от второго аргумента - флаг, который указывает,какую именно операцию следует выполнить):
// 1) перевод всех символов в верхний регистр,2) перевод всех символов в нижний регистр,3) перевод всех символов в нижний регистр и первых символов слов в верхний регистр.
$str = "Написать функцию - конвертер строки";
function convert($str, $flag){
    if(($flag!==1)&&($flag!==2)&&($flag!==3)){
        var_dump("введите номер операции от 1 до 3");
    }
    if($flag==1){
        var_dump(mb_strtoupper($str));
        return;
    }
    if($flag==2){
        var_dump(mb_strtolower($str));
        return;
    }
    if($flag==3) {
        var_dump(mb_convert_case(mb_strtolower($str),MB_CASE_TITLE));
        return;
    }
    else{
        echo 'невалидные данные';
    }
};
convert($str, 3);
//3.Создать функцию по преобразованию нотаций: строка вида 'this_is_string' преобразуется в 'thisIsString' (CamelCase-нотация)

