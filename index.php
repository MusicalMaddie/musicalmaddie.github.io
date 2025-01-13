<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Word Generator Testing</title>
</head>
<body>
    <h1>Random Word Generator Test!</h1>
    <p>Please enter the database details:</p>

    <!-- Update the action to point to your backend PHP URL -->
    <form action="https://backend.maddiemeyers.com/process.php" method="POST">
        <label for="db_host">Database Host:</label><br>
        <input type="text" id="db_host" name="db_host" value="pixie.porkbun.com" readonly><br><br>

        <label for="db_user">Database Username:</label><br>
        <input type="text" id="db_user" name="db_user" required><br><br>

        <label for="db_pass">Database Password:</label><br>
        <input type="password" id="db_pass" name="db_pass" required><br><br>

        <label for="db_name">Database Name:</label><br>
        <input type="text" id="db_name" name="db_name" value="maddiemeyers_com" readonly><br><br>

        <input type="submit" value="Generate Random Words">
    </form>
</body>
</html>
