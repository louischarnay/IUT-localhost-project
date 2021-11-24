<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de test PHP</title>
</head>
<body>
    <div>
        <p>Test</p>
        <?php 

            $command = escapeshellcmd('test_php.py');
            $output = shell_exec($command);
            echo $output;

        ?>
    </div>
</body>
</html>