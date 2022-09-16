<?php
namespace cars\core\hashing;
class Hash
{
   public static function hash($password , $option = 'PASSWORD_DEFAULT'){
       return password_hash($password , $option);
   }
    public static function verify($value, $hashedValue)
    {
        return password_verify($value, $hashedValue);
    }

}