<?php
    session_save_path("./sess");
    session_start();

    $id = $_POST["id"];
    $pass = $_POST["pass"];

    echo "id = $id , pass = $pass ";

    if($id == "test" and $pass== "1111")
    {
        $_SESSION["sess_id"] = $id;
        $_SESSION["sess_name"] = "홍길동";
        $msg = "홍길동님 반갑습니다.";
    }else
    {
        $msg = "아이디와 비번 확인하세요";
    }


?>
<script>
    alert('<?php echo $msg?>');
    location.href = 'print.php';
</script>

