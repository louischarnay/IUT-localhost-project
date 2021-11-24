<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
    <p>éxécution......</p>
    </main>


    <?php
        try
        {
            $data=new PDO('sqlite:' . __DIR__ . '/database.db');
            $data->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $Eception)
        {
            die(1);
            echo "<p>mort<p>";
        }

        $data->exec("DROP TABLE IF EXISTS account");
        $data->exec("DROP TABLE IF EXISTS users");
        $data->exec("DROP TABLE IF EXISTS movies");
        $data->exec("DROP TABLE IF EXISTS rating");

        
        $data->exec("CREATE TABLE IF NOT EXISTS account
                ('id' INTEGER PRIMARY KEY AUTOINCREMENT,
                'email' varchar(255),
                'password' varchar(255));");

        $data->exec("CREATE TABLE IF NOT EXISTS users
                ('id' INTEGER PRIMARY KEY AUTOINCREMENT,
                'accountId' INTEGER,
                'username' varchar(255),
                FOREIGN KEY(id) REFERENCES account(accountId));");

        $data->exec("CREATE TABLE IF NOT EXISTS movies
                ('id' INTEGER PRIMARY KEY AUTOINCREMENT,
                'name' INTEGER,
                'type' varchar(255),
                'timestamp' float);");

        $data->exec("CREATE TABLE IF NOT EXISTS rating
                ('id' INTEGER PRIMARY KEY AUTOINCREMENT,
                'movieId' INTEGER,
                'usersId' INTEGER,
                'mark' INTEGER,      
                FOREIGN KEY(id) REFERENCES users(usersId),
                FOREIGN KEY(id) REFERENCES movies(movieId));");

    ?>
</body>
</html>