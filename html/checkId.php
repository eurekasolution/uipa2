<?php

    $json = file_get_contents("php://input");
    $decodeInput = json_decode($json);

    $id = $decodeInput->id;
    $msg = $decodeInput->msg;

    echo "입력한 값은 $id, msg = $msg";

?>