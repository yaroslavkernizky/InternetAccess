<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%computers}}".
 *
 * @property integer $id
 * @property string $ip
 * @property string $mac
 * @property integer $classRoomId
 *
 * @property ClassRooms $classRoom
 */
class Computers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%computers}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ip', 'mac'], 'required'],
            [['classRoomId'], 'integer'],
            [['ip', 'mac'], 'string', 'max' => 255],
            [['classRoomId'], 'exist', 'skipOnError' => true, 'targetClass' => ClassRooms::className(), 'targetAttribute' => ['classRoomId' => 'id']],
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
            'mac' => 'Mac',
            'classRoomId' => 'Class Room ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassRoom()
    {
        return $this->hasOne(ClassRooms::className(), ['id' => 'classRoomId']);
    }
}
