<?php

namespace cars\models\admin;

class usersModel extends Model
{
    protected string $firstName;
    protected string $lastName;
    protected string $password;
    protected string $address;
    protected int    $telephone;
    protected string $photo;
    protected $tableName = 'users';
    protected array $schema = [
        'firstName',
        'lastName',
        'password',
        'address',
        'telephone',
        'photo'

    ];

    public function getAll(){
        return $this->get_all();
    }
    public function deleteRow($id){
        return $this->delete($id);
    }


}