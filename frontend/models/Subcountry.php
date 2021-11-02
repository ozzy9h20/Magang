<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "sub_country".
 *
 * @property int $id
 * @property string $country_code
 * @property string $name
 */
class Subcountry extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sub_country';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country_code', 'name'], 'required'],
            [['country_code'], 'string', 'max' => 2],
            [['name'], 'string', 'max' => 52],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'country_code' => 'Country Code',
            'name' => 'Name',
        ];
    }
}
