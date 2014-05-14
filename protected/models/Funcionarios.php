<?php

/**
 * This is the model class for table "funcionarios".
 *
 * The followings are the available columns in table 'funcionarios':
 * @property integer $idfuncionarios
 * @property string $nome
 * @property string $sexo
 * @property string $endereco
 * @property string $telefone
 * @property string $celular
 * @property string $cpf
 * @property string $data_nascimento
 * @property string $email
 * @property string $data_cadastro
 * @property string $hora_cadastro
 * @property integer $status_cadastro
 * @property integer $idempresa
 * @property integer $idcargo
 *
 * The followings are the available model relations:
 * @property DeslocamentoCidade[] $deslocamentoCidades
 * @property Empresa $idempresa0
 * @property Cargo $idcargo0
 * @property ProgramacaoViagens[] $programacaoViagens
 * @property SolicitacoesMaquinas[] $solicitacoesMaquinases
 * @property SolicitacoesVeiculos[] $solicitacoesVeiculoses
 * @property Usuarios[] $usuarioses
 */
class Funcionarios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'funcionarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, sexo, endereco, telefone, cpf, data_nascimento, email, data_cadastro, hora_cadastro, status_cadastro, idempresa, idcargo', 'required'),
			array('status_cadastro, idempresa, idcargo', 'numerical', 'integerOnly'=>true),
			array('nome, endereco', 'length', 'max'=>100),
			array('sexo', 'length', 'max'=>1),
			array('telefone, celular', 'length', 'max'=>10),
			array('cpf', 'length', 'max'=>15),
			array('data_nascimento', 'length', 'max'=>12),
			array('email', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idfuncionarios, nome, sexo, endereco, telefone, celular, cpf, data_nascimento, email, data_cadastro, hora_cadastro, status_cadastro, idempresa, idcargo', 'safe', 'on'=>'search'),
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
			'deslocamentoCidades' => array(self::HAS_MANY, 'DeslocamentoCidade', 'idfuncionarios'),
			'idempresa0' => array(self::BELONGS_TO, 'Empresa', 'idempresa'),
			'idcargo0' => array(self::BELONGS_TO, 'Cargo', 'idcargo'),
			'programacaoViagens' => array(self::HAS_MANY, 'ProgramacaoViagens', 'idfuncionarios'),
			'solicitacoesMaquinases' => array(self::HAS_MANY, 'SolicitacoesMaquinas', 'idfuncionarios'),
			'solicitacoesVeiculoses' => array(self::HAS_MANY, 'SolicitacoesVeiculos', 'idfuncionarios'),
			'usuarioses' => array(self::HAS_MANY, 'Usuarios', 'idfuncionarios'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idfuncionarios' => 'Idfuncionarios',
			'nome' => 'Nome',
			'sexo' => 'Sexo',
			'endereco' => 'Endereco',
			'telefone' => 'Telefone',
			'celular' => 'Celular',
			'cpf' => 'Cpf',
			'data_nascimento' => 'Data Nascimento',
			'email' => 'Email',
			'data_cadastro' => 'Data Cadastro',
			'hora_cadastro' => 'Hora Cadastro',
			'status_cadastro' => 'Status Cadastro',
			'idempresa' => 'Idempresa',
			'idcargo' => 'Idcargo',
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

		$criteria->compare('idfuncionarios',$this->idfuncionarios);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('endereco',$this->endereco,true);
		$criteria->compare('telefone',$this->telefone,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('cpf',$this->cpf,true);
		$criteria->compare('data_nascimento',$this->data_nascimento,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('data_cadastro',$this->data_cadastro,true);
		$criteria->compare('hora_cadastro',$this->hora_cadastro,true);
		$criteria->compare('status_cadastro',$this->status_cadastro);
		$criteria->compare('idempresa',$this->idempresa);
		$criteria->compare('idcargo',$this->idcargo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Funcionarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
