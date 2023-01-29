<?php
        $num=222;
    //here doc               for parse the data
    echo <<<MyData
    Welcome to geekyshows
    It is very "important" $num
    MyData;
    

    //Now doc
    echo <<<'Mydata'
    Welcome to geekyshows
    It is very "important" $num    
    Mydata;

?>