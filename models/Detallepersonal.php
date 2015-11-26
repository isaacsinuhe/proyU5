<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detalle_personal".
 *
 * @property integer $id_detalle_personal
 * @property integer $id_tarea
 * @property integer $id_personal
 *
 * @property Personal $idPersonal
 * @property Tarea $idTarea
 */
class Detallepersonal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detalle_personal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tarea', 'id_personal'], 'required'],
            [['id_tarea', 'id_personal'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_detalle_personal' => 'Id Detalle Personal',
            'id_tarea' => 'Id Tarea',
            'id_personal' => 'Id Personal',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPersonal()
    {
        return $this->hasOne(Personal::className(), ['id_personal' => 'id_personal']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTarea()
    {
        return $this->hasOne(Tarea::className(), ['id_tarea' => 'id_tarea']);
    }
}
