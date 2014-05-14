<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property integer $idusuarios
 * @property string $login
 * @property string $senha
 * @property integer $status_cadastro
 * @property integer $tipo_usuario
 * @property string $data_cadastro
 * @property string $hora_cadastro
 * @property integer $idfuncionarios
 *
 * The followings are the available model relations:
 * @property Funcionarios $idfuncionarios0
 */
class Usuarios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('login, senha, status_cadastro, idfuncionarios', 'required'),
			array('status_cadastro, tipo_usuario, idfuncionarios', 'numerical', 'integerOnly'=>true),
			array('login, senha', 'length', 'max'=>45),
			array('data_cadastro, hora_cadastro', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idusuarios, login, senha, status_cadastro, tipo_usuario, data_cadastro, hora_cadastro, idfuncionarios', 'safe', 'on'=>'search'),
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
			'idfuncionarios0' => array(self::BELONGS_TO, 'Funcionarios', 'idfuncionarios'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idusuarios' => 'Idusuarios',
			'login' => 'Login',
			'senha' => 'Senha',
			'status_cadastro' => 'Status Cadastro',
			'tipo_usuario' => 'Tipo Usuario',
			'data_cadastro' => 'Data Cadastro',
			'hora_cadastro' => 'Hora Cadastro',
			'idfuncionarios' => 'Idfuncionarios',
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

		$criteria->compare('idusuarios',$this->idusuarios);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('senha',$this->senha,true);
		$criteria->compare('status_cadastro',$this->status_cadastro);
		$criteria->compare('tipo_usuario',$this->tipo_usuario);
		$criteria->compare('data_cadastro',$this->data_cadastro,true);
		$criteria->compare('hora_cadastro',$this->hora_cadastro,true);
		$criteria->compare('idfuncionarios',$this->idfuncionarios);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
