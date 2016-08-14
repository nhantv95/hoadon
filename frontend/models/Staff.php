<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "staff".
 *
 * @property integer $id
 * @property string $UserName
 */
class Staff extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'staff';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'UserName'], 'required'],
            [['id'], 'integer'],
            [['UserName'], 'string', 'max' => 50],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'UserName' => 'User Name',
        ];
    }
}
