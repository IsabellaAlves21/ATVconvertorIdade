<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Convertor de Idade</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>Calcule sua Idade</h1>
    <form method="post" action="">
        <label for="birthdate">Data de Nascimento:</label>
        <input type="date" id="birthdate" name="birthdate" required>
        <button type="submit">Calcular Idade</button>
    </form>
 
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $birthdate = $_POST['birthdate'];
        if (!empty($birthdate)) {
            $birthDate = new DateTime($birthdate);
            $currentDate = new DateTime();
            $interval = $currentDate->diff($birthDate);
 
            echo "<h2>Resultado:</h2>";
            echo "Você tem " . $interval->y . " anos, " . $interval->m . " meses e " . $interval->d . " dias.";
        } else {
            echo "<p style='color:red;'>Por favor, insira uma data válida.</p>";
        }
    }
    ?>
</body>
</html>