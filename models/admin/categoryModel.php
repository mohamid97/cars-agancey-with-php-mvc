<?php

namespace cars\models\admin;

class categoryModel extends Model
{
    public string $categoryName;
    public string $type;
    protected $tableName= 'category';
    protected array $schema = [
        'categoryName',
        'type'
    ];

    public  function getAll(){
        return $this->get_all();
    }
    public function create(){
        return $this->store();
    }
    public function deleteRow($id){
        return $this->delete($id);
    }
    public function getWhere(array $id){
        return $this->getWhereRow($id);
    }
    public function edit($id){
        return $this->edit_table($id);
    }

}