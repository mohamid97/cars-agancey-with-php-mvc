<?php
namespace cars\models\admin;
class adminModel extends Model
{
    protected string $username = 'ahmed';
    protected string $email = "mo@gmail.com";
    protected string $password = "123";
    protected string $passwordConfirmed;
    protected string $tableName = "admin";
    protected array $schema = [
         'username',
         'email',
         'password'

    ];


    public function createAdmin(){
        echo $this->create();
    }
    public function getwhere($value){
        return $this->getwhereRow($value);
    }






}