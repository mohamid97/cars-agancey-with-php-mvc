<?php

namespace cars\models\admin;

use cars\core\databases\Database;

abstract class Model
{
    private function returnSchema():array{
        return $this->schema;
    }
    private function prepareValues(\PDOStatement &$stmt)
    {
        foreach ($this->returnSchema() as $columnName) {

                $stmt->bindValue(":{$columnName}", $this->$columnName,);

        }
    }

    /* add value and prepared it to bind */
    private function buildNameParametersSQL()
    {
        $namedParams = '';
        foreach ($this->returnSchema() as $columnName) {
            $namedParams .= $columnName . ' = :' . $columnName . ', ';
        }
        return trim($namedParams, ', ');
    }

    protected function store()
    {
        $sql = 'INSERT INTO ' . $this->tableName . ' SET ' . $this->buildNameParametersSQL();
        $stmt = Database::getInstance()->prepare($sql);
        $this->prepareValues($stmt);
        if($stmt->execute()){
            return true;
        }

    }
    public function edit_table($id){
      $sql = 'UPDATE '.$this->tableName.' SET '.$this->buildNameParametersSQL() .' WHERE id = '.$id;
      $stmt = Database::getInstance()->prepare($sql);
      $this->prepareValues($stmt);
        if($stmt->execute()){
            return true;
        }

    }

    protected function delete($id){
        $sql = 'DELETE FROM ' . $this->tableName . '  WHERE id  = ' . $id;
        $stmt = Database::getInstance()->prepare($sql);
        if($stmt->execute()){
            return true;
        }
    }

    protected function get_all(){

        $sql = 'SELECT * FROM ' . $this->tableName;
        $stmt = Database::getInstance()->prepare($sql);
        if($stmt->execute()):
            $res = $stmt->fetchAll();
            if(is_array($res) && !empty($res)):
                return $res;
            endif;

        endif;

    }

    private function where($values){
        if(is_array($values) and !empty($values)){
            $where = '';
            foreach ($values as $key=> $value){
                $where .= $key." = '".$value ."' AND ";
            }
            return rtrim($where , 'AND ');

        }
    }
    protected  function getWhereRow(array $value){

        $sql = "SELECT * FROM  $this->tableName  WHERE " .$this->where($value);
        $stmt = Database::getInstance()->prepare($sql);
        if($stmt->execute()):
            $res = $stmt->fetchAll();
            if(is_array($res) && !empty($res)):
                return $res;

            endif;

        endif;
    }


    public function getOnly(array $params){
        $only= '';
        foreach ($params as $param){
            $only .= $param . ',';
        }
        $only = rtrim($only , ',');
        $sql = "SELECT ". $only ." FROM " . $this->tableName;
        $stmt = Database::getInstance()->prepare($sql);
        if($stmt->execute()):
            $res = $stmt->fetchAll();
            return $res;

        endif;

    }

    public function getCountTable(){
        $sql = "SELECT COUNT(*) as count FROM " .$this->tableName;
        $stmt = Database::getInstance()->prepare($sql);
        if($stmt->execute()):
            $res = $stmt->fetchAll();
           return $res;
            endif;

    }



}