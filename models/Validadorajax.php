<?php

namespace app\models;

use yii\base\Model;

class Validadorajax extends Model{
    public $nombre;
    public $email;

  public function rules()
    {
        return [
            ['nombre', 'required', 'message' => 'Campo requerido'],
            ['nombre', 'match', 'pattern' => "/^.{3,50}$/", 'message' => 'Mínimo 3 y máximo 50 caracteres'],
            ['nombre', 'match', 'pattern' => "/^[a-z]+$/i", 'message' => 'Sólo se aceptan letras'],
            // ['nombre', 'match', 'pattern' => "/^[0-9a-z]+$/i", 'message' => 'Sólo se aceptan letras y números'],
            ['email', 'required', 'message' => 'Campo requerido'],
            ['email', 'match', 'pattern' => "/^.{5,80}$/", 'message' => 'Mínimo 5 y máximo 80 caracteres'],
            ['email', 'email', 'message' => 'Formato no válido'],
        ];
    }

    public function attributeLabels()
    {
        return[
            "nombre"=>"Nombre: ",
            "email"=>"Email: ",
        ];
    }
}