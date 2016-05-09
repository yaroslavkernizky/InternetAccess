<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%empl_ClassR}}".
 *
 * @property integer $emploeeId
 * @property integer $classRoomId
 *
 * @property ClassRooms $classRoom
 * @property Emploees $emploee
 */
class Empl_ClassR extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%empl_ClassR}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['emploeeId', 'classRoomId'], 'required'],
            [['emploeeId', 'classRoomId'], 'integer'],
            [['classRoomId'], 'exist', 'skipOnError' => true, 'targetClass' => ClassRooms::className(), 'targetAttribute' => ['classRoomId' => 'id']],
            [['emploeeId'], 'exist', 'skipOnError' => true, 'targetClass' => Emploees::className(), 'targetAttribute' => ['emploeeId' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'emploeeId' => 'Emploee ID',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmploee()
    {
        return $this->hasOne(Emploees::className(), ['id' => 'emploeeId']);
    }
}
