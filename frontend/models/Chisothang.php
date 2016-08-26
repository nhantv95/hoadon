<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chisothang".
 *
 * @property integer $MaKhachHang
 * @property integer $nguoiChotID
 * @property string $ngayChot
 * @property integer $chiSoChot
 * @property integer $thangChot
 * @property string $namChot
 * @property string $trangThaiNop
 */
class Chisothang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chisothang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaKhachHang', 'nguoiChotID', 'ngayChot', 'chiSoChot', 'thangChot', 'namChot', 'trangThaiNop'], 'required'],
            [['MaKhachHang', 'nguoiChotID', 'chiSoChot', 'thangChot'], 'integer'],
            [['ngayChot', 'namChot'], 'safe'],
            [['trangThaiNop'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaKhachHang' => 'Ma Khach Hang',
            'nguoiChotID' => 'Nguoi Chot ID',
            'ngayChot' => 'Ngay Chot',
            'chiSoChot' => 'Chi So Chot',
            'thangChot' => 'Thang Chot',
            'namChot' => 'Nam Chot',
            'trangThaiNop' => 'Trang Thai Nop',
        ];
    }
}
