<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%administrators}}".
 *
 * @property integer $id
 * @property integer $emploeeId
 *
 * @property Emploees $emploee
 */
class Administrators extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%administrators}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['emploeeId'], 'integer'],
            [['emploeeId'], 'unique'],
            [['emploeeId'], 'exist', 'skipOnError' => true, 'targetClass' => Emploees::className(), 'targetAttribute' => ['emploeeId' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'emploeeId' => 'Emploee ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmploee()
    {
        return $this->hasOne(Emploees::className(), ['id' => 'emploeeId']);
    }

    public function getFullname()
    {
        return $this->emploee->name.' '.$this->emploee->surname.' '.$this->emploee->patronymic;
    }

    public function getEmail()
    {
        return $this->emploee->email;
    }
}
