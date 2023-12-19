<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "support".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $surname
 * @property string|null $patronymic
 * @property string|null $number
 * @property string|null $email
 * @property string|null $message
 * @property string|null $image
 */
class Support extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'support';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['message'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['patronymic'], 'string', 'max' => 255],
            [['surname'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 255],
            [['number'], 'string', 'max' => 20],
//            [['image'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],  // Для картинки
//            [['image'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'patronymic' => 'Отчество',
            'surname' => 'Фамилия',
            'email' => 'Электронна почта',
            'number' => 'Телефон',
            'message' => 'Сообщение',
//            'image' => 'Прикрепить фото'  // Для картинки
        ];
    }
//    public function saveSupport()
//    {
//        $support = new Support();
//        $support->name = $this->name;
//        $support->surname = $this->surname;
//        $support->patronymic = $this->patronymic;
//        $support->email = $this->email;
//        $support->number = $this->number;
//        $support->message = $this->message;
//        $support->image = $this->image;
//        $support->save();
//    }


    // Для картинки
//    public function upload()
//    {
//        if ($this->validate()) {
//            $this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
//            return true;
//        } else {
//            return false;
//        }
//    }

}
