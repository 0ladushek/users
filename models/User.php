<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $firs_name
 * @property string $last_name
 * @property string $birth_date
 * @property int $gender
 * @property string $phone
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['birth_date'], 'safe'],
            [['gender'], 'integer'],
            [['firs_name', 'last_name', 'phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firs_name' => 'Имя',
            'last_name' => 'Фамилия',
            'birth_date' => 'Дата рождения',
            'gender' => 'Пол',
            'phone' => 'Телефон',
        ];
    }
}
