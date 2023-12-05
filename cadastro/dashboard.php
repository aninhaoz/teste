<?php 
session_start();
if(empty($_SESSION)){
    print "<script>location.href='index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="naybar naybar-light bg-light">
        <div class="conteiner-fluid">
            <a class="naybar-brand">Instituto Federal 2023</a>
        <?php 
        print "Olá, ".$_SESSION["nome"];
        print "<a href='logout.php' class='btn-danger'>Sair</a>";
        ?>
        </div>
    </nav>
</body>
</html>