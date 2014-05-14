<?php

/**
 * This is the model class for table "maquinas".
 *
 * The followings are the available columns in table 'maquinas':
 * @property string $numero_serie
 * @property string $descricao
 * @property string $categoria
 * @property string $ano_modelo
 * @property string $chassi
 * @property string $data_cadastro
 * @property string $hora_cadastro
 * @property integer $status_cadastro
 * @property integer $idfrotas
 * @property integer $iddados_aquisicao
 *
 * The followings are the available model relations:
 * @property Frotas $idfrotas0
 * @property DadosAquisicao $iddadosAquisicao
 * @property RevGarantiaMaquinas[] $revGarantiaMaquinases
 * @property SaidaMaquina[] $saidaMaquinas
 * @property SolicitacoesMaquinas[] $solicitacoesMaquinases
 */
class Maquinas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'maquinas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('numero_serie, chassi, data_cadastro, hora_cadastro, status_cadastro, idfrotas, iddados_aquisicao', 'required'),
			array('status_cadastro, idfrotas, iddados_aquisicao', 'numerical', 'integerOnly'=>true),
			array('numero_serie, categoria', 'length', 'max'=>45),
			array('ano_modelo', 'length', 'max'=>10),
			array('chassi', 'length', 'max'=>25),
			array('descricao', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('numero_serie, descricao, categoria, ano_modelo, chassi, data_cadastro, hora_cadastro, status_cadastro, idfrotas, iddados_aquisicao', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idfrotas0' => array(self::BELONGS_TO, 'Frotas', 'idfrotas'),
			'iddadosAquisicao' => array(self::BELONGS_TO, 'DadosAquisicao', 'iddados_aquisicao'),
			'revGarantiaMaquinases' => array(self::HAS_MANY, 'RevGarantiaMaquinas', 'numero_serie'),
			'saidaMaquinas' => array(self::HAS_MANY, 'SaidaMaquina', 'numero_serie'),
			'solicitacoesMaquinases' => array(self::HAS_MANY, 'SolicitacoesMaquinas', 'numero_serie'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'numero_serie' => 'Numero Serie',
			'descricao' => 'Descricao',
			'categoria' => 'Categoria',
			'ano_modelo' => 'Ano Modelo',
			'chassi' => 'Chassi',
			'data_cadastro' => 'Data Cadastro',
			'hora_cadastro' => 'Hora Cadastro',
			'status_cadastro' => 'Status Cadastro',
			'idfrotas' => 'Idfrotas',
			'iddados_aquisicao' => 'Iddados Aquisicao',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('numero_serie',$this->numero_serie,true);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('categoria',$this->categoria,true);
		$criteria->compare('ano_modelo',$this->ano_modelo,true);
		$criteria->compare('chassi',$this->chassi,true);
		$criteria->compare('data_cadastro',$this->data_cadastro,true);
		$criteria->compare('hora_cadastro',$this->hora_cadastro,true);
		$criteria->compare('status_cadastro',$this->status_cadastro);
		$criteria->compare('idfrotas',$this->idfrotas);
		$criteria->compare('iddados_aquisicao',$this->iddados_aquisicao);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Maquinas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
