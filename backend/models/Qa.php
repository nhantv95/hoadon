<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "qa".
 *
 * @property integer $id
 * @property integer $khanhHangID
 * @property string $tieuDe
 * @property string $noiDung
 */
class Qa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'qa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['khanhHangID', 'tieuDe', 'noiDung'], 'required'],
            [['khanhHangID'], 'integer'],
            [['tieuDe', 'noiDung'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'khanhHangID' => 'Khanh Hang ID',
            'tieuDe' => 'Tieu De',
            'noiDung' => 'Noi Dung',
        ];
    }
}
