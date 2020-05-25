<?php
namespace app\models;
use yii\base\Model;

class SignupForm extends Model{

    public $username;
    public $password;
    public $otdel;


    public function rules() {
        return [
            [['username', 'password','otdel'], 'required', 'message' => 'Заполните поле'],
            ['username', 'unique', 'targetClass' => User::className(),  'message' => 'Этот логин уже занят'],
        ];
    }

    public function attributeLabels() {
        return [
            'username' => 'Логин',
            'password' => 'Пароль',
            'otdel' => 'Отдел',
        ];
    }




}
