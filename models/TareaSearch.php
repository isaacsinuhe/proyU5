<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tarea;

/**
 * TareaSearch represents the model behind the search form about `\app\models\Tarea`.
 */
class TareaSearch extends Tarea
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tarea', 'id_tipotarea'], 'integer'],
            [['nombre', 'descripcion', 'fechainicio', 'fechatermino'], 'safe'],
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
        $query = Tarea::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_tarea' => $this->id_tarea,
            'id_tipotarea' => $this->id_tipotarea,
            'fechainicio' => $this->fechainicio,
            'fechatermino' => $this->fechatermino,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion]);

        return $dataProvider;
    }
}
