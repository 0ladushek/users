<?php

use yii\db\Migration;

/**
 * Handles the creation of table `users`.
 */
class m180125_192943_create_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'firs_name' => $this->string(),
            'last_name' => $this->string(),
            'birth_date' => $this->date(),
            'gender' => $this->boolean(),
            'phone' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('users');
    }
}
