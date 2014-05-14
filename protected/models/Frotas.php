<?php

/**
 * This is the model class for table "frotas".
 *
 * The followings are the available columns in table 'frotas':
 * @property integer $idfrotas
 * @property string $nome
 * @property string $descricao
 * @property string $objetivo
 * @property string $data_cadastro
 * @property string $hora_cadastro
 * @property integer $status_cadastro
 * @property integer $idempresa
 *
 * The followings are the available model relations:
 * @property Empresa $idempresa0
 * @property Maquinas[] $maquinases
 * @property Veiculos[] $veiculoses
 */
class Frotas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'frotas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, data_cadastro, hora_cadastro, status_cadastro, idempresa', 'required'),
			array('status_cadastro, idempresa', 'numerical', 'integerOnly'=>true),
			array('nome', 'length', 'max'=>45),
			array('objetivo', 'length', 'max'=>255),
			array('descricao', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idfrotas, nome, descricao, objetivo, data_cadastro, hora_cadastro, status_cadastro, idempresa', 'safe', 'on'=>'search'),
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
			'idempresa0' => array(self::BELONGS_TO, 'Empresa', 'idempresa'),
			'maquinases' => array(self::HAS_MANY, 'Maquinas', 'idfrotas'),
			'veiculoses' => array(self::HAS_MANY, 'Veiculos', 'idfrotas'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idfrotas' => 'Idfrotas',
			'nome' => 'Nome',
			'descricao' => 'Descricao',
			'objetivo' => 'Objetivo',
			'data_cadastro' => 'Data Cadastro',
			'hora_cadastro' => 'Hora Cadastro',
			'status_cadastro' => 'Status Cadastro',
			'idempresa' => 'Idempresa',
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

		$criteria->compare('idfrotas',$this->idfrotas);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('objetivo',$this->objetivo,true);
		$criteria->compare('data_cadastro',$this->data_cadastro,true);
		$criteria->compare('hora_cadastro',$this->hora_cadastro,true);
		$criteria->compare('status_cadastro',$this->status_cadastro);
		$criteria->compare('idempresa',$this->idempresa);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Frotas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
