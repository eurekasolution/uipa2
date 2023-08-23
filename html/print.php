<?php
    session_save_path("./sess");
    session_start();
?>
<!doctype html>
<html lang="ko">
    <head>
        <meta charset="utf-8" />
        <title>HTML5 ❤😂</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="style01.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
    
    </head>
<body>


    <div class="container">
        <div class="row rowLine">
            <div class="col">
                <h4 class="text-primary">DOM</h4>
            </div>
        </div>

        <?php
            if(isset($_SESSION["sess_id"]))
            {
                ?>

                <button type="button" class="btn btn-primary" onClick="location.href='logout.php'; "><?php echo $_SESSION["sess_name"] ?> 로그아웃</button>
                
                <?php
            }else
            {
        ?>

        <form method="POST" action="login.php">
        <div class="row rowLine">
            <div class="col">
                ID
            </div>
            <div class="col">
                <input type="text" name="id" class="form-control">
            </div>
            <div class="col">
                PW
            </div>
            <div class="col">
                <input type="password" name="pass" class="form-control">
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">로그인</button>
            </div>
        </div>
        </form>

        <?php
            }
        ?>
    </div>
 
</body>
</html>