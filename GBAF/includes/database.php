<?php 

    /**
     * Connexion à la base de données.
     */
function getPDO() {
try {
    $pdo = new PDO('mysql:dbname=clients;port=3306;host=127.0.0.1', 'root', '');
    $pdo->exec("SET CHARACTER SET utf8");
return $pdo;
} 
catch (PDOException $e) {
            var_dump($e);
}
}
                     // sert à vérifier si le mail, le pseudo sont déjà utilisés dans le formulaire d'inscription!
    

function countDatabaseValue($connexionBDD, $key, $value) {
    $request = "SELECT * FROM users WHERE $key = ?";
    $rowCount = $connexionBDD->prepare($request);
    $rowCount->execute(array($value));
return $rowCount->rowCount();
}
?>