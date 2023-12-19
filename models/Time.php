<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "time".
 *
 * @property int $id
 * @property string $day
 * @property string $time1
 * @property string $time2
 * @property string $time3
 * @property int|null $session_id
 *
 * @property Session $session
 */
class Time extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'time';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['day', 'time1', 'time2', 'time3'], 'required'],
            [['session_id'], 'integer'],
            [['day', 'time1', 'time2', 'time3'], 'string', 'max' => 255],
            [['session_id'], 'exist', 'skipOnError' => true, 'targetClass' => Session::class, 'targetAttribute' => ['session_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'day' => 'Day',
            'time1' => 'Time1',
            'time2' => 'Time2',
            'time3' => 'Time3',
            'session_id' => 'Session ID',
        ];
    }

    /**
     * Gets query for [[Session]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSession()
    {
        return $this->hasOne(Session::class, ['id' => 'session_id']);
    }
}
