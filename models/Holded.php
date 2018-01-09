<?php
namespace macklus\holded\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\helpers\Json;

/**
 * This is the model class for table "holded".
 *
 * @property int $id
 * @property string $encoded_data
 * @property string $date_add
 * @property string $date_edit
 */
class Holded extends \yii\db\ActiveRecord
{

    public $data = [];

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'holded';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['encoded_data'], 'required'],
            [['encoded_data'], 'string'],
            [['date_add', 'date_edit'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('holded', 'ID'),
            'encoded_data' => Yii::t('holded', 'Encoded Data'),
            'date_add' => Yii::t('holded', 'Date Add'),
            'date_edit' => Yii::t('holded', 'Date Edit'),
        ];
    }

    /**
     * @inheritdoc
     * @return \macklus\holded\query\HoldedQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \macklus\holded\query\HoldedQuery(get_called_class());
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'date_add',
                'updatedAtAttribute' => 'date_edit',
                'value' => new Expression('NOW()'),
            ],
        ];
    }

    public function beforeValidate()
    {
        $this->encoded_data = JSON::encode(mb_convert_encoding($this->data, 'UTF-8', 'UTF-8'), true);
        return parent::beforeValidate();
    }

    public function afterFind()
    {
        $this->data = JSON::decode($this->encoded_data, true);
        return parent::afterFind();
    }
}
