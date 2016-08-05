<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Vendido".
 *
 * @property integer $id
 * @property integer $id_ventas
 * @property integer $id_producto
 * @property integer $cantidad
 * @property string $precio_unitario
 * @property string $importe
 */
class Vendido extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Vendido';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_ventas', 'id_producto', 'cantidad', 'precio_unitario', 'importe'], 'required'],
            [['id_ventas', 'id_producto', 'cantidad'], 'integer'],
            [['precio_unitario', 'importe'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_ventas' => 'Id Ventas',
            'id_producto' => 'Id Producto',
            'cantidad' => 'Cantidad',
            'precio_unitario' => 'Precio Unitario',
            'importe' => 'Importe',
        ];
    }
}
