<?php
//Formas de evitar:
//striptags - remove todas as tags
//htmlespecialchars

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_POST['busca'])){
    echo strip_tags($_POST['busca']);
    echo "<br>";
    echo htmlentities($_POST['busca']);
}
?>
<form method="post">
    <input type="text" name="busca" >
    <button type="submit">Enviar</button>
</form>
    
</body>
</html>