<?php

class m0001_initial
{
    public function up()
    {
        // echo "Applying migration\n".PHP_EOL;
        $db = \App\Core\Application::$app->db;
        $SQL = "CREATE TABLE users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(255) NOT NULL,
            firstname VARCHAR(255) NOT NULL,
            lastname VARCHAR(255) NOT NULL,
            status TINYINT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )  ENGINE=INNODB;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        echo "Reversing migration\n".PHP_EOL;
        // $db = \App\Core\Application::$app->db;
        // $SQL = "DROP TABLE users;";
        // $db->pdo->exec($SQL);
    }
}