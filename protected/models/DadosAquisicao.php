<?php

/**
 * This is the model class for table "dados_aquisicao".
 *
 * The followings are the available columns in table 'dados_aquisicao':
 * @property integer $iddados_aquisicao
 * @property string $data_aquisicao
 * @property integer $valor_nf
 * @property integer $quant_parcelas
 * @property integer $garantia_anos
 * @property integer $intervalo_revisao
 * @property integer $quant_limite
 * @property integer $lancar_odometro
 * @property string $recomendacoes_fabricante
 * @property string $data_cadastro
 * @property string $hora_cadastro
 * @property integer $status_cadastro
 *
 * The followings are the available model relations:
 * @property Maquinas[] $maquinases
 * @property Veiculos[] $veiculoses
 */
class DadosAquisicao extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dados_aquisicao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('data_aquisicao, valor_nf, garantia_anos, intervalo_revisao, recomendacoes_fabricante, data_cadastro, hora_cadastro, status_cadastro', 'required'),
			array('valor_nf, quant_parcelas, garantia_anos, intervalo_revisao, quant_limite, lancar_odometro, status_cadastro', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('iddados_aquisicao, data_aquisicao, valor_nf, quant_parcelas, garantia_anos, intervalo_revisao, quant_limite, lancar_odometro, recomendacoes_fabricante, data_cadastro, hora_cadastro, status_cadastro', 'safe', 'on'=>'search'),
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
			'maquinases' => array(self::HAS_MANY, 'Maquinas', 'iddados_aquisicao'),
			'veiculoses' => array(self::HAS_MANY, 'Veiculos', 'iddados_aquisicao'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'iddados_aquisicao' => 'Iddados Aquisicao',
			'data_aquisicao' => 'Data Aquisicao',
			'valor_nf' => 'Valor Nf',
			'quant_parcelas' => 'Quant Parcelas',
			'garantia_anos' => 'Garantia Anos',
			'intervalo_revisao' => 'Intervalo Revisao',
			'quant_limite' => 'Quant Limite',
			'lancar_odometro' => 'Lancar Odometro',
			'recomendacoes_fabricante' => 'Recomendacoes Fabricante',
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

		$criteria->compare('iddados_aquisicao',$this->iddados_aquisicao);
		$criteria->compare('data_aquisicao',$this->data_aquisicao,true);
		$criteria->compare('valor_nf',$this->valor_nf);
		$criteria->compare('quant_parcelas',$this->quant_parcelas);
		$criteria->compare('garantia_anos',$this->garantia_anos);
		$criteria->compare('intervalo_revisao',$this->intervalo_revisao);
		$criteria->compare('quant_limite',$this->quant_limite);
		$criteria->compare('lancar_odometro',$this->lancar_odometro);
		$criteria->compare('recomendacoes_fabricante',$this->recomendacoes_fabricante,true);
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
	 * @return DadosAquisicao the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
