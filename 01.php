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
    <form method="get" action="aula10b.php">
        Numero:   <input type="number" name="n1"><br>
        <fieldset><legend>Operação</legend>
            <input type="radio" name="oper" id="Dobro" value="1" checked>
            <label for="Dobro">Dobro</label>
            <input type="radio" name="oper" id="Cubo" value="2" checked>
            <label for="Cubo">Cubo</label>
            <input type="radio" name="oper" id="Raiz" value="3" checked>
            <label for="Raiz">Raiz Quadrada</label>
        </fieldset>
        <input type="submit" value="calcular"><br>
    </form>
</body>

</html>