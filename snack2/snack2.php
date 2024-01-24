<?php 
    $results = '';
    if (isset($_GET['name']) && (isset($_GET['email'])) && (isset($_GET['age']))) {
        $name = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['age'];

        if (strlen($name) < 3){
            $results = 'Accesso negato!';
        }
        elseif (!str_contains($email, '@') && !str_contains($email, '.')){
            $results = 'Accesso negato!';
        }
        elseif (!is_numeric($age)){
            $results = 'Accesso negato!';
        }
        else{
            $results = 'Accesso consentito!';
        }
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
    <h1>Snack 2</h1>
    <form action="./snack2.php" method="GET">
        <label for="">Name:</label>
        <input type="text" name="name">
        <label for="">Email:</label>
        <input type="text" name="email">
        <label for="">Age:</label>
        <input type="text" name="age">
        <button type="submit">Send</button>
    </form>
    <h1><?php echo $results; ?></h1>
</body>
</html>