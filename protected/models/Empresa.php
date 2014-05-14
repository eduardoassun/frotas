<?php

/**
 * This is the model class for table "empresa".
 *
 * The followings are the available columns in table 'empresa':
 * @property integer $idempresa
 * @property string $nome_fantasia
 * @property string $razao_social
 * @property string $responsavel_proprietario
 * @property string $endereco
 * @property string $estado
 * @property string $cidade
 * @property string $telefone
 * @property string $celular
 * @property string $email
 * @property string $cnpj
 * @property string $inscricao_estadual
 * @property string $inscricao_municipal
 * @property string $atividade
 * @property string $data_cadastro
 * @property string $hora_cadastro
 * @property integer $status_cadastro
 *
 * The followings are the available model relations:
 * @property Cargo[] $cargos
 * @property Fornecedores[] $fornecedores
 * @property Frotas[] $frotases
 * @property Funcionarios[] $funcionarioses
 */
class Empresa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'empresa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome_fantasia, estado, cidade, telefone, cnpj, data_cadastro, hora_cadastro, status_cadastro', 'required'),
			array('status_cadastro', 'numerical', 'integerOnly'=>true),
			array('nome_fantasia, responsavel_proprietario, endereco', 'length', 'max'=>100),
			array('razao_social, estado, cidade, atividade', 'length', 'max'=>45),
			array('telefone, celular, inscricao_estadual', 'length', 'max'=>10),
			array('email', 'length', 'max'=>75),
			array('cnpj', 'length', 'max'=>15),
			array('inscricao_municipal', 'length', 'max'=>12),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idempresa, nome_fantasia, razao_social, responsavel_proprietario, endereco, estado, cidade, telefone, celular, email, cnpj, inscricao_estadual, inscricao_municipal, atividade, data_cadastro, hora_cadastro, status_cadastro', 'safe', 'on'=>'search'),
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
			'cargos' => array(self::HAS_MANY, 'Cargo', 'idempresa'),
			'fornecedores' => array(self::HAS_MANY, 'Fornecedores', 'idempresa'),
			'frotases' => array(self::HAS_MANY, 'Frotas', 'idempresa'),
			'funcionarioses' => array(self::HAS_MANY, 'Funcionarios', 'idempresa'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idempresa' => 'Idempresa',
			'nome_fantasia' => 'Nome Fantasia',
			'razao_social' => 'Razao Social',
			'responsavel_proprietario' => 'Responsavel Proprietario',
			'endereco' => 'Endereco',
			'estado' => 'Estado',
			'cidade' => 'Cidade',
			'telefone' => 'Telefone',
			'celular' => 'Celular',
			'email' => 'Email',
			'cnpj' => 'Cnpj',
			'inscricao_estadual' => 'Inscricao Estadual',
			'inscricao_municipal' => 'Inscricao Municipal',
			'atividade' => 'Atividade',
			'data_cadastro' => 'Data Cadastro',
			'hora_cadastro' => 'Hora Cadastro',
			'status_cadastro' => 'Status Cadastro',
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

		$criteria->compare('idempresa',$this->idempresa);
		$criteria->compare('nome_fantasia',$this->nome_fantasia,true);
		$criteria->compare('razao_social',$this->razao_social,true);
		$criteria->compare('responsavel_proprietario',$this->responsavel_proprietario,true);
		$criteria->compare('endereco',$this->endereco,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('cidade',$this->cidade,true);
		$criteria->compare('telefone',$this->telefone,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('cnpj',$this->cnpj,true);
		$criteria->compare('inscricao_estadual',$this->inscricao_estadual,true);
		$criteria->compare('inscricao_municipal',$this->inscricao_municipal,true);
		$criteria->compare('atividade',$this->atividade,true);
		$criteria->compare('data_cadastro',$this->data_cadastro,true);
		$criteria->compare('hora_cadastro',$this->hora_cadastro,true);
		$criteria->compare('status_cadastro',$this->status_cadastro);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Empresa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
