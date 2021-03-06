<?php

/*
 * Exercice
 * 1 - Créer une classe BankAccount avec 2 propriétés
 * - owner (type string) : propriétaire du compte
 * - balance (type double) : solde du compte
 * Prévoir une valeur par défaut à 0 pour balance
 * 2 - Ajouter les getters / setters sauf setBalance
 * 3 - Créer des méthodes credit($amount) et debit($amount)
 * qui mettront à jour le solde
 * 4 - Dans credit et debit interdire les montants négatifs
 *
 * Le programme suivant doit être fonctionnel
 */

/*
 * Exercice 2
 * Transformer le code suivant et le code de BankAccount
 * pour que owner soit de type Contact et non plus string
 */

require_once 'vendor/autoload.php';

try {
    $account = new \Ajc\Bank\BankAccount();

    $owner = new \Ajc\Entity\Contact();
    $owner->setFirstName('Romain')->setLastName('Bohdanowicz');
    $account->setOwner($owner);

    echo "Balance : " . $account->getBalance() . "\n"; // 0
    echo "Owner : " . $account->getOwner() . "\n"; // Jean

    $account->credit(1000);
    $account->debit(200);

    echo "Balance : " . $account->getBalance() . "\n"; // 800
}
catch (Exception $e) {
    echo 'Erreur : ' .$e->getMessage() . "\n";
}