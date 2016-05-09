<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%emploees}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $patronymic
 * @property string $email
 *
 * @property Administrators $administrators
 * @property EmplClassR[] $emplClassRs
 * @property ClassRooms[] $classRooms
 * @property Teachers $teachers
 */
class Emploees extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%emploees}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'email'], 'required'],
            [['name', 'surname', 'patronymic', 'email'], 'string', 'max' => 255],
            ['email','email']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'patronymic' => 'Patronymic',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdministrators()
    {
        return $this->hasOne(Administrators::className(), ['emploeeId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmplClassRs()
    {
        return $this->hasMany(EmplClassR::className(), ['emploeeId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassRooms()
    {
        return $this->hasMany(ClassRooms::className(), ['id' => 'classRoomId'])->viaTable('{{%empl_ClassR}}', ['emploeeId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeachers()
    {
        return $this->hasOne(Teachers::className(), ['emploeeId' => 'id']);
    }

    public function getFullname()
    {
        return $this->name.' '.$this->surname.' '.$this->patronymic;
    }
}
