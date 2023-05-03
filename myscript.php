<?php
// calcolo lunghezza della seconda stringa 'cognome'
$lunghezzaInput = strlen($_POST['cognome']);

//sostituisco alle lettere gli *
$replace = str_repeat('*', $lunghezzaInput);

//modificare la seconda parola
$nuovoTesto = str_replace($_POST['cognome'], $replace, $_POST['cognome']);

echo 'Ciao '. $_POST['nome'] .' ' .$nuovoTesto;