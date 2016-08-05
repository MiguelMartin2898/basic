<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Ventas".
 *
 * @property integer $id
 * @property integer $folio
 * @property integer $id_cliente
 * @property integer $piezas
 * @property string $subtotal
 * @property string $iva
 * @property string $total
 */
class Ventas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Ventas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['folio', 'id_cliente', 'piezas', 'subtotal', 'iva', 'total'], 'required'],
            [['folio', 'id_cliente', 'piezas'], 'integer'],
            [['subtotal', 'iva', 'total'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'folio' => 'Folio',
            'id_cliente' => 'Id Cliente',
            'piezas' => 'Piezas',
            'subtotal' => 'Subtotal',
            'iva' => 'Iva',
            'total' => 'Total',
        ];
    }
}
