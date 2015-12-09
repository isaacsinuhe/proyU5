<?php

namespace app\models;
use app\models\Detallepersonal;
use Yii;

/**
 * This is the model class for table "tipotarea".
 *
 * @property integer $id_tipotarea
 * @property string $nombre
 *
 * @property Tarea[] $tareas
 */
class Tipotarea extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipotarea';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tipotarea' => 'Id Tipotarea',
            'nombre' => 'Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTareas()
    {
        return $this->hasMany(Tarea::className(), ['id_tipotarea' => 'id_tipotarea']);
    }


}
