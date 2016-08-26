<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property string $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $display_name
 * @property integer $status
 * @property string $email
 * @property string $phone
 * @property string $gender
 * @property string $dob
 * @property string $created_at
 * @property string $updated_at
 * @property integer $SoKhau
 * @property integer $isDeleted
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'phone', 'SoKhau', 'isDeleted'], 'required','message'=>'Trường không được bỏ trống'],
            [['status', 'SoKhau', 'isDeleted'], 'integer'],
            [['gender'], 'string'],
            [['dob', 'created_at', 'updated_at'], 'safe'],
            [['username', 'display_name'], 'string', 'max' => 50],
            [['auth_key'], 'string', 'max' => 32],
            [['password_hash', 'password_reset_token'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 13],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'display_name' => 'Display Name',
            'status' => 'Status',
            'email' => 'Email',
            'phone' => 'Phone',
            'gender' => 'Gender',
            'dob' => 'Dob',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'SoKhau' => 'So Khau',
            'isDeleted' => 'Is Deleted',
        ];
    }
}
