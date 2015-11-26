<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "personal".
 *
 * @property integer $id_personal
 * @property string $nombre
 * @property string $apellidos
 * @property resource $imagen
 * @property string $direccion
 * @property string $telefono
 *
 * @property DetallePersonal[] $detallePersonals
 */
class Personal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'personal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'apellidos', 'direccion', 'telefono'], 'required'],
            [['imagen'], 'string'],
            [['nombre'], 'string', 'max' => 20],
            [['apellidos'], 'string', 'max' => 50],
            [['direccion'], 'string', 'max' => 100],
            [['telefono'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_personal' => 'Id Personal',
            'nombre' => 'Nombre',
            'apellidos' => 'Apellidos',
            'imagen' => 'Imagen',
            'direccion' => 'Direccion',
            'telefono' => 'Telefono',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetallePersonals()
    {
        return $this->hasMany(DetallePersonal::className(), ['id_personal' => 'id_personal']);
    }
}
