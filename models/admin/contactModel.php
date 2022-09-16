<?php

namespace cars\models\admin;

class contactModel extends Model
{
    protected int $number1;
    protected int $number2;
    protected string $address;
    protected string $agancyName;
    protected string $email;
    protected string $facebook;
    protected string $twitter;
    protected string $instagram;
    protected string $loction;
    protected string $aboutUs;
    protected string $tableName = 'contact';
    protected $tableScheme =[
        'number1',
        'number2',
        'address',
        'agancyName',
        'email',
        'facebook',
        'twitter',
        'instagram',
        'location',
        'aboutUs',
    ];
    public function getAll(){
        return $this->get_all();
    }

}