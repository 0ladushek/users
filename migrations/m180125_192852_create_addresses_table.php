<?php

use yii\db\Migration;

/**
 * Handles the creation of table `addresses`.
 */
class m180125_192852_create_addresses_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('addresses', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'address' => $this->string(),
            'user_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('addresses');
    }
}
