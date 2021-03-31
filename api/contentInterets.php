<?php
    $Query = $pdo->query("SELECT * FROM Article WHERE `Article`.`PageId` = 4")->fetchAll(\PDO::FETCH_ASSOC);
    