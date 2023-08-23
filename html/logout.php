<?php
    session_save_path("./sess");
    session_start();

    $msg = "안녕히 가세요..";
    session_destroy();


?>
<script>
    alert('<?php echo $msg?>');
    location.href = 'print.php';
</script>

