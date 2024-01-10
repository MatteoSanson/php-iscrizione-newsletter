<?php
function rightEmail($email_utente) {
    // la mail contiene "@" e "."
    return (strpos($email_utente, '@') !== false && strpos($email_utente, '.') !== false);
}

function alertEmail() {
    if (isset($_GET["email_utente"])):
        $email_utente = $_GET["email_utente"];

        $alertClass = rightEmail($email_utente) ? 'alert-success' : 'alert-danger';
?>
        <div class="mt-3 alert <?php echo $alertClass; ?>" role="alert">
            <?php if (rightEmail($email_utente)): ?>
                La tua e-mail è valida: <?php echo $email_utente; ?>
            <?php else: ?>
                La mail che hai inserito <?php echo $email_utente; ?> non è corretta. Una e-mail valida deve contenere "@" e "."
            <?php endif; ?>
        </div>
<?php
    endif;
}
?>
