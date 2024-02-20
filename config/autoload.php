
<?php
//  Permet le chargement automatique des classes et configure PHP pour avoir de meilleurs messages d’erreurs.

// Strict


// Enable all PHP errors


// Autoload logic

function chargerClasse($classname)
{
    require 'class/' . $classname . '.php';
}
spl_autoload_register('chargerClasse');

// Session
session_start();

?>