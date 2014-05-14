<?php

/**
 * This is the model class for table "veiculos".
 *
 * The followings are the available columns in table 'veiculos':
 * @property string $placa
 * @property string $descricao
 * @property string $categoria
 * @property string $ano_modelo
 * @property integer $quilometragem
 * @property string $renavam
 * @property string $chassi
 * @property string $data_cadastro
 * @property string $hora_cadastro
 * @property integer $status_cadastro
 * @property integer $idfrotas
 * @property integer $iddados_aquisicao
 *
 * The followings are the available model relations:
 * @property DeslocamentoCidade[] $deslocamentoCidades
 * @property ManuPneus[] $manuPneuses
 * @property ManuPreventivaCorretiva[] $manuPreventivaCorretivas
 * @property ProgramacaoViagens[] $programacaoViagens
 * @property RevGarantiaVeiculos[] $revGarantiaVeiculoses
 * @property SaidaVeiculo[] $saidaVeiculos
 * @property SolicitacoesVeiculos[] $solicitacoesVeiculoses
 * @property TrocaConsumiveis[] $trocaConsumiveises
 * @property Frotas $idfrotas0
 * @property DadosAquisicao $iddadosAquisicao
 */
class Veiculos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'veiculos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('placa, renavam, chassi, data_cadastro, hora_cadastro, status_cadastro, idfrotas, iddados_aquisicao', 'required'),
			array('quilometragem, status_cadastro, idfrotas, iddados_aquisicao', 'numerical', 'integerOnly'=>true),
			array('placa, ano_modelo', 'length', 'max'=>10),
			array('categoria', 'length', 'max'=>45),
			array('renavam', 'length', 'max'=>15),
			array('chassi', 'length', 'max'=>25),
			array('descricao', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('placa, descricao, categoria, ano_modelo, quilometragem, renavam, chassi, data_cadastro, hora_cadastro, status_cadastro, idfrotas, iddados_aquisicao', 'safe', 'on'=>'search'),
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
			'deslocamentoCidades' => array(self::HAS_MANY, 'DeslocamentoCidade', 'placa'),
			'manuPneuses' => array(self::HAS_MANY, 'ManuPneus', 'placa'),
			'manuPreventivaCorretivas' => array(self::HAS_MANY, 'ManuPreventivaCorretiva', 'placa'),
			'programacaoViagens' => array(self::HAS_MANY, 'ProgramacaoViagens', 'placa'),
			'revGarantiaVeiculoses' => array(self::HAS_MANY, 'RevGarantiaVeiculos', 'placa'),
			'saidaVeiculos' => array(self::HAS_MANY, 'SaidaVeiculo', 'placa'),
			'solicitacoesVeiculoses' => array(self::HAS_MANY, 'SolicitacoesVeiculos', 'placa'),
			'trocaConsumiveises' => array(self::HAS_MANY, 'TrocaConsumiveis', 'placa'),
			'idfrotas0' => array(self::BELONGS_TO, 'Frotas', 'idfrotas'),
			'iddadosAquisicao' => array(self::BELONGS_TO, 'DadosAquisicao', 'iddados_aquisicao'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'placa' => 'Placa',
			'descricao' => 'Descricao',
			'categoria' => 'Categoria',
			'ano_modelo' => 'Ano Modelo',
			'quilometragem' => 'Quilometragem',
			'renavam' => 'Renavam',
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

		$criteria->compare('placa',$this->placa,true);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('categoria',$this->categoria,true);
		$criteria->compare('ano_modelo',$this->ano_modelo,true);
		$criteria->compare('quilometragem',$this->quilometragem);
		$criteria->compare('renavam',$this->renavam,true);
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
	 * @return Veiculos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
