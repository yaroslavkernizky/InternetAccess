<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%classRooms}}".
 *
 * @property integer $id
 * @property integer $number
 *
 * @property Computers[] $computers
 * @property EmplClassR[] $emplClassRs
 * @property Emploees[] $emploees
 */
class ClassRooms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%classRooms}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['number'], 'required'],
            [['number'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number' => 'Number',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComputers()
    {
        return $this->hasMany(Computers::className(), ['classRoomId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmplClassRs()
    {
        return $this->hasMany(EmplClassR::className(), ['classRoomId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmploees()
    {
        return $this->hasMany(Emploees::className(), ['id' => 'emploeeId'])->viaTable('{{%empl_ClassR}}', ['classRoomId' => 'id']);
    }
}
