<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tarea".
 *
 * @property integer $id_tarea
 * @property integer $id_tipotarea
 * @property string $nombre
 * @property string $descripcion
 * @property string $fechainicio
 * @property string $fechatermino
 *
 * @property Detallepersonal[] $detallePersonals
 * @property Tipotarea $idTipotarea
 */
class Tarea extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tarea';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tipotarea', 'nombre', 'descripcion', 'fechainicio', 'fechatermino'], 'required'],
            [['id_tipotarea'], 'integer'],
            [['fechainicio', 'fechatermino'], 'safe'],
            [['nombre'], 'string', 'max' => 10],
            [['descripcion'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tarea' => 'Id Tarea',
            'id_tipotarea' => 'Id Tipotarea',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'fechainicio' => 'Fechainicio',
            'fechatermino' => 'Fechatermino',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetallePersonals()
    {
        return $this->hasMany(DetallePersonal::className(), ['id_tarea' => 'id_tarea']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTipotarea()
    {
        return $this->hasOne(Tipotarea::className(), ['id_tipotarea' => 'id_tipotarea']);
    }
}
