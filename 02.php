<html>
<head>
    <title>teste</title>
    <meta charset="utf-8">
    <style type="text/css">
        body{
            color: #00ff09;
            background-color: rgba(0,4,153,0.38);
        }
    </style>
</head>
<body>
<?php
    $n1 = isset($_GET["n1"])? $_GET["n1"]: 0;
    $o = isset($_GET["oper"])? $_GET["oper"]: 1;
    switch ($o){
        case 1:
            $r = $n1 * 2;
            break;
        case 2:
            $r = $n1 ^ 3;
            break;
        case 3:
            $r = sqrt($n1);
            break;
    }
    echo "O numero escolhido foi $n1 e a operação foi $o";
    echo "<br>O resultado foi $r";
?>
<br><a href="01.php">Voltar</a>
</body>
</html>
