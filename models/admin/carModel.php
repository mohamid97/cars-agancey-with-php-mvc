<?php
namespace cars\models\admin;
namespace cars\models\admin;

class carModel extends Model
{
    public $category_id;
    public $carName;
    public $avatar;
    public $gallary;
    public $price;
    public $description;
    public $model;
    public $year;
    public $location;
    public $mileage;
    public $color;
    public $engine;
    public $status;
    public $transmision;
    public $fuel;
    public $engineSize;
    public $stockNumber;
    public $vin;
    public $madeIn;
    protected $tableName='cars';
    protected array $schema = [
        'category_id',
        'carName',
        'avatar',
        'gallary',
        'price',
        'description',
        'year',
        'model',
        'location',
        'mileage',
        'color',
        'engine',
        'status',
        'transmision',
        'fuel',
        'engineSize',
        'stockNumber',
        'vin',
        'madeIn'
    ];

   public function create(){
       return $this->store();
   }


}