<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comprado".
 *
 * @property integer $id
 * @property integer $id_compras
 * @property integer $id_producto
 * @property integer $cantidad
 * @property string $conto_unitario
 * @property string $importe
 */
class Comprado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comprado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_compras', 'id_producto', 'cantidad', 'conto_unitario', 'importe'], 'required'],
            [['id_compras', 'id_producto', 'cantidad'], 'integer'],
            [['conto_unitario', 'importe'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_compras' => 'Id Compras',
            'id_producto' => 'Id Producto',
            'cantidad' => 'Cantidad',
            'conto_unitario' => 'Conto Unitario',
            'importe' => 'Importe',
        ];
    }
}
