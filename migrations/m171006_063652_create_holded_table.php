<?php

use yii\db\Migration;

/**
 * Handles the creation of table `holded`.
 */
class m171006_063652_create_holded_table extends Migration
{

    public function safeUp()
    {
        $this->createTable('holded', [
            'id' => 'INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY',
            'encoded_data' => 'TEXT CHARSET utf8 COLLATE utf8_general_ci NOT NULL',
            'date_add' => 'TIMESTAMP',
            'date_edit' => 'TIMESTAMP'
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('holded');
    }
}
