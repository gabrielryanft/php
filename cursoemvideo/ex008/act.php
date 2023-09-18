<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP output</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Output das super globais</h1>
    </header>
    <main>
        <pre>
            <?php 
                setcookie("dia", "seg", time() + 3600);

                session_start();
                $_SESSION["mamamia?"] = "sim";


                echo "<h2>\$_GET</h2>";
                var_dump($_GET);

                echo "<h2>\$_POST</h2>";
                var_dump($_POST);

                echo "<h2>\$_REQUEST</h2>";
                var_dump($_REQUEST);

                echo "<h2>\$_COOKIE</h2>";
                var_dump($_COOKIE);

                echo "<h2>\$_FILES</h2>";
                var_dump($_FILES);

                echo "<h2>\$_SESSION</h2>";
                var_dump($_SESSION);

                echo "<h2>\$_ENV</h2>";
                var_dump($_ENV);
                foreach (getenv() as $c => $v){
                    echo "<br> $c => $v";
                }

                echo "<h2>\$_SERVER</h2>";
                var_dump($_SERVER);

                echo "<h2>\$GLOBAL</h2>";
                var_dump($GLOBALS)
            ?>
        </pre>
    </main>
</body>
</html>