<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%allowedsites}}".
 *
 * @property integer $id
 * @property string $ip
 */
class Allowedsites extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%allowedsites}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ip'], 'required'],
            [['ip'], 'string', 'max' => 255],
            [['ip'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ip' => 'Ip',
        ];
    }
}
