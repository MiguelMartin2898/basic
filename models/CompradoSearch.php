<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Comprado;

/**
 * CompradoSearch represents the model behind the search form about `app\models\Comprado`.
 */
class CompradoSearch extends Comprado
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_compras', 'id_producto', 'cantidad'], 'integer'],
            [['conto_unitario', 'importe'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Comprado::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_compras' => $this->id_compras,
            'id_producto' => $this->id_producto,
            'cantidad' => $this->cantidad,
            'conto_unitario' => $this->conto_unitario,
            'importe' => $this->importe,
        ]);

        return $dataProvider;
    }
}
