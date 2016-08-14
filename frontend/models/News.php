<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $tieuDe
 * @property string $anhBia
 * @property string $noiDung
 * @property string $moTa
 * @property integer $nguoiDangID
 * @property string $ngayDang
 * @property integer $loaiThongBaoID
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tieuDe', 'anhBia', 'noiDung', 'moTa', 'nguoiDangID', 'ngayDang', 'loaiThongBaoID'], 'required'],
            [['tieuDe', 'anhBia', 'noiDung', 'moTa'], 'string'],
            [['nguoiDangID', 'loaiThongBaoID'], 'integer'],
            [['ngayDang'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tieuDe' => 'Tieu De',
            'anhBia' => 'Anh Bia',
            'noiDung' => 'Noi Dung',
            'moTa' => 'Mo Ta',
            'nguoiDangID' => 'Nguoi Dang ID',
            'ngayDang' => 'Ngay Dang',
            'loaiThongBaoID' => 'Loai Thong Bao ID',
        ];
    }
	
	public function getLoaiThongBao(){
		 $this->hasOne(LoaiThongBao::className(), ['loaiThongBaoID' => 'id']);
	}
}
