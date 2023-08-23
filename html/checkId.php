<?php

    $json = file_get_contents("php://input");
    $decodeInput = json_decode($json);

    $id = $decodeInput->id;
    $msg = $decodeInput->msg;

    if(strlen($id) < 4)
    {
        echo "4글자 이상 입력하세요.";
    }else if(strlen($id)<10)
    {
        if($id == "test" or $id == "admin")
        {
            echo "사용중인 아이디입니다.";
        }else
        {
            echo "사용 가능한 아이디 : $id ";
        }
    }else
    {
        echo "10자 이하 입력하세요.";
    }
?>