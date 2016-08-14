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
            [['tieuDe', 'anhBia', 'noiDung'], 'required'],
            [['tieuDe', 'anhBia', 'noiDung'], 'string'],
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
        ];
    }
}
