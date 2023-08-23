<?php

    $id = $_POST["id"];
    $msg = $_POST["msg"];


    if(strlen($id) < 4)
    {
        echo "A : 4글자 이상 입력하세요.";
    }else if(strlen($id)<10)
    {
        if($id == "test" or $id == "admin")
        {
            echo "A : 사용중인 아이디입니다.";
        }else
        {
            echo "A : 사용 가능한 아이디 : $id ";
        }
    }else
    {
        echo "A : 10자 이하 입력하세요.";
    }
?>