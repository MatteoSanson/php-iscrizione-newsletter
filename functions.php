<?php
function rightEmail($email_utente) {
    // la mail contiene "@" e "."
    return (strpos($email_utente, '@') !== false && strpos($email_utente, '.') !== false);
}

function alertEmail() {
    if (isset($_GET["email_utente"])):
        $email_utente = $_GET["email_utente"];

        if (rightEmail($email_utente)):
?>
            <div class="mt-3 alert alert-success" role="alert">
                La tua e-mail è valida: <?php echo $email_utente; ?>
            </div>
<?php else: ?>
            <div class="mt-3 alert alert-danger" role="alert">
                La mail che hai inserito <?php echo $email_utente; ?> non è corretta. Una e-mail valida deve contenere "@" e "."
            </div>
<?php
        endif;
    endif;
}
?>
