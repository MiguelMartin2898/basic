<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clietes".
 *
 * @property string $nombre
 * @property string $apellido
 */
class Clietes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clietes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'apellido'], 'required'],
            [['nombre', 'apellido'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
        ];
    }
}
