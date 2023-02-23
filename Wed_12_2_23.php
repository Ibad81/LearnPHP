<?php

// echo(print(print('Hello Word')));
// echo 'printname ','Fknd';
// print 'ijdindi','ibiks';.
// echo(print(print(printf("%d",11))));

// echo printf("%d","0");
// echo printf("%b","Ibad");
// echo printf("%c","Ibad");
// echo printf("%o","Ibad");

// echo(print(print(printf("%d",2))))

// $var=32;
// $val="23njn";
// var_dump ($val+$var);

// echo (print(printf("%d",print("PHP"))));

// echo (print(printf("%d",sprintf("PHP"))));

// echo(print(printf("%d",printf("Php"))));

// echo printf("Php examination")




// constant

// define("pi",45);
// echo pi;

// define("Greet","Hello");

// function mytest(){
//     echo Greet;
// }
// mytest();

// $x=13;
// $y=14;
// var_dump ($x<=>$y);

// echo "Hello"."World";

// $data="Ibad";
// $data.="bAIG";
// ECHO $data;

// $data=[10,20,30];
// $data_new=array(40,20,50,60);
// var_dump ($data_new+$data);


// $data=array("a"=>"red","b"=>"blue","c"=>"Black");
// $data_new=array("a"=>"knd","bf"=>"knk");

// print_r($data_new+$data);

// $arr=[100,"ibad"=>10,20];
// $arr1=[40,20,60,50];
// print_r($arr1+$arr )


// teranry Operators

// $x=(7>8)?:printf("No");
// print $x;

// $x=null??5;
// echo $x;

// $x="0"??8;
// echo $x

// $val=null;
// $res=$val??null;
// echo $res;

// $data="0000";
// $new_data=(int)$data;
// var_dump($new_data);

// $data="9";
// $value=78;
// $data_two=(bool)$data;
// var_dump($data_two);


    $num1=10;
    $num2=20;
    $num3=30;
    $num4=40;
    $ans1=($num1<$num2)?($num2):($num1);
    $ans2=($num3<$num4)?($num4):($num3);

    $res=($ans1>$ans2)?($ans1):($ans2);
    echo $res;
?>