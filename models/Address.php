<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "addresses".
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property int $user_id
 */
class Address extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'addresses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['name', 'address'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '',
            'name' => 'Название адреса',
            'address' => 'Адрес',
            'user_id' => '',
        ];
    }
}
