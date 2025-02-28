<!DOCTYPE html>
<html lang="ro">
<head>
    <title>Simplu Poll - PHP + SQL</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        form { display: inline-block; text-align: left; background: #f0f0f0; padding: 20px; border-radius: 10px; }
        input[type="submit"] { margin-top: 10px; padding: 5px 15px; cursor: pointer; }
    </style>
</head>
<body>

<h2>Ce limbaj preferi?</h2>
<form action="vote.php" method="POST">
    <label><input type="radio" name="option" value="PHP"> PHP</label><br>
    <label><input type="radio" name="option" value="Python"> Python</label><br>
    <label><input type="radio" name="option" value="JavaScript"> JavaScript</label><br>
    <input type="submit" value="Votează">
</form>

</body>
</html>
