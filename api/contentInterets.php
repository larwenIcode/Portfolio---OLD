<?php
    $Query = $pdo->query("SELECT * FROM Article WHERE `Article`.`PageId` = 4")->fetchAll(\PDO::FETCH_ASSOC);
    echo "<h1>Ceci est un test d'API</h1>";