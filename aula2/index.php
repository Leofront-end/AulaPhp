<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - PHP</title>
</head>
<body>
    <h1>Tabuada em PHP</h1>
    <h1>
        <?php
        $titulo = "Aula 02 - Tabuada em PHP ";
        $titulo = "Aula de PHP";
        $titulo = "Fatec Ferraz Vasconcelos";
        $titulo = 2024;
        $titulo = 2000.00;
        $titulo = true;
        echo $titulo . "<br>";
        ?>
    </h1>

    <br>
    <h3>Método GET e POST</h3>
    <form action="calculadora.php" method="get">
        <label for="numero1">Número 1:</label>
        <input type="text" name="numero1" placeholder="Digite algo" id="numero1">
        <br>

        <label for="numero2">Número 2: </label>
        <input type="number" name="numero2" placeholder="Digite algo" id="numero2">
        
        <br>
        <label for="numero3">Número 3:</label>
        <select name="numero3" id="numero3">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <br>
        <input type="submit" value="Calcular">

    </form>

</body>
</html>