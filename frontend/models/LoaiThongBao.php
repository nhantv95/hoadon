<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "loaithongbao".
 *
 * @property integer $id
 * @property string $ChuDe
 * @property integer $NguoiTaoID
 * @property string $NgayTao
 */
class LoaiThongBao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'loaithongbao';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ChuDe', 'NguoiTaoID', 'NgayTao'], 'required'],
            [['NguoiTaoID'], 'integer'],
            [['NgayTao'], 'safe'],
            [['ChuDe'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ChuDe' => 'Chu De',
            'NguoiTaoID' => 'Nguoi Tao ID',
            'NgayTao' => 'Ngay Tao',
        ];
    }
}
