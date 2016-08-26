<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hopdong".
 *
 * @property integer $maHopDong
 * @property integer $maKhachHang
 * @property integer $nguoiNhapID
 * @property string $ngayKi
 * @property string $ngayHetHan
 * @property string $loaiHopDong
 */
class Hopdong extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hopdong';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['maKhachHang', 'nguoiNhapID', 'ngayKi', 'ngayHetHan', 'loaiHopDong'], 'required'],
            [['maKhachHang', 'nguoiNhapID'], 'integer'],
            [['ngayKi', 'ngayHetHan'], 'safe'],
            [['loaiHopDong'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'maHopDong' => 'Ma Hop Dong',
            'maKhachHang' => 'Ma Khach Hang',
            'nguoiNhapID' => 'Nguoi Nhap ID',
            'ngayKi' => 'Ngay Ki',
            'ngayHetHan' => 'Ngay Het Han',
            'loaiHopDong' => 'Loai Hop Dong',
        ];
    }
}
