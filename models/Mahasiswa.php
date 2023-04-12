<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Mahasiswa".
 *
 * @property int $nrp
 * @property string|null $nama
 * @property string|null $alamat
 * @property string|null $email
 * @property string|null $tanggal_lahir
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nrp'], 'required', 'message' => 'Please input NRP'],
            [['nrp'], 'integer'],
            [['tanggal_lahir'], 'safe'],
            [['nama', 'alamat'], 'string', 'max' => 255],
            [['nrp'], 'unique'],
            [['email'], 'email']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nrp' => 'Nrp',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'email' => 'Email',
            'tanggal_lahir' => 'Tanggal Lahir',
        ];
    }
}
