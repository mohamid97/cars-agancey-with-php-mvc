<?php

namespace cars\core\validation;

class Validator
{
    protected array $data = [];
    protected array  $rules = [];
    protected array $errors = [];
    protected array $types = ['png' , 'jpeg'];
    public $imgName;
    public function isError(){
        if(!empty($this->errors)){
            return true;
        }
    }
   public function getErrors(){
       return $this->errors;
   }
    public function make($data){
        $this->data = $data;
        $this->validate();

    }
    public function setRules($rules){
        $this->rules = $rules;
    }

    private function  validate(){

        foreach ($this->rules as $key =>$value){
            $exolde = [];
            unset($exolde);
            $exolde = explode('|' , $value);
            foreach ($exolde as $ex){
                if($this->$ex($this->data[$key]) !== true){
                       $this->errors[$key][] = $this->$ex($this->data[$key]);
                }
            }
        }
    }

    private function required($data){
        return (!empty($data))? true : 'must be required';
    }
    private function numeric($data){
        return (is_numeric($data))? true:'must be nnumber';
    }
    private function text($data){
        return ($this->required($data) && is_string($data))? true : 'must be string';
    }
    private function email($data){
        return filter_var( $data, FILTER_VALIDATE_EMAIL) ? true :'mus be valid';
    }
    private function min3($data){
        if(strlen($data) < 3 ){
            return 'must > 3 ';
        }else{
            return true;
        }
    }

    private function max20($data){
     if(strlen($data) > 20){
         return 'must < 20';
     }else{
         return true;
     }

    }

    public function avatar(){
        if (isset($_FILES) && !empty($_FILES['avatar']['name'][0])):
            if (empty($this->errors)):
                $avatarName = date("y-m-d h:i:sa").'avatar'.$_FILES['avatar']['name'];
                $fileSize = $_FILES['avatar']['size'];
                $fileTemp = $_FILES['avatar']['tmp_name'];
                $fileType = $_FILES['avatar']['type'];
                if($this->checkSize($fileSize , 'avatar') && $this->checkExtension($fileType , 'avatar')):
                    $this->imgName['avatar'] = $avatarName;
                    move_uploaded_file($fileTemp , IMG_PATH.$avatarName);
                endif;
            endif;
        else:
            $this->errors['avatar'][] = 'is required';
        endif;
    }

    public function validateImages(){
        if(isset($_FILES) && !empty($_FILES['gallary']['name'][0])):
            if(empty($this->isError())):
                foreach($_FILES['gallary']['tmp_name'] as $key => $tmp_name ):
                    $imageName = date("Y-m-d h:i:sa").$key.$_FILES['gallary']['name'][$key];
                    $fileSize =$_FILES['gallary']['size'][$key];
                    $fileTmp =$_FILES['gallary']['tmp_name'][$key];
                    $fileType=$_FILES['gallary']['type'][$key];
                    if($this->checkSize($fileSize ,'gallary') && $this->checkExtension($fileType , 'gallary')):
                        $this->imgName['gallary'][$key] = $imageName;
                        move_uploaded_file($fileTmp , IMG_PATH.$imageName);
                    endif;
                endforeach;
            endif;
        else:
            $this->errors['gallary'][] ="is required";
        endif;
    }

    private function checkSize($size , $type):bool{
        if ($size > 2097152):
            $this->errors[$type][] = 'image size must be less than 2 MB';
            return false;
        else:
            return true;
        endif;
    }
    private function checkExtension($extension , $type):bool{
        $ex = explode("/" , $extension);
        if(!in_array(end($ex) , $this->types)):
            $this->errors[$type][] ="extension is not allowed";
            return false;
        else:
            return true;
        endif;
    }


}