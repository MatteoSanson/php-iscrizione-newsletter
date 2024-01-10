<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- /bootstrap cdn  -->
    <title>PHP Iscrizione Newsletter</title>
</head>
<body>
    <header>
        <div class="container text-center p-4">
        <h1>PHP Iscrizione Newsletter</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <form action="index.php" method="GET">
                <div class="mb-3">
                    <label for="email_utente" class="form-label">Inserisci un indirizzo e-mail di registrazione</label>
                    <input type="text" class="form-control" id="email_utente" name="email_utente">
                </div>
                
                <button type="submit" class="btn btn-primary">Conferma</button>
            </form>

            <?php
                if (isset($_GET["email_utente"])) {
                    $email_utente = $_GET["email_utente"];

                    // la mail contiene "@" e "."
                    if (strpos($email_utente, '@') !== false && strpos($email_utente, '.') !== false) {
                        echo '<div class="mt-3 alert alert-success" role="alert">';
                        echo 'La tua e-mail è valida: ' . $email_utente;
                        echo '</div>';
                    } else {
                        echo '<div class="mt-3 alert alert-danger" role="alert">';
                        echo 'La mail che hai inserito ' . $email_utente . ' non è corretta. Una e-mail valida deve contenere "@" e "."';
                        echo '</div>';
                    }
                }
            ?>
        </div>
    </main>
</body>
</html>