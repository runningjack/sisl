<?php
/**
 * Created by PhpStorm.
 * User: Amedora
 * Date: 1/11/15
 * Time: 10:04 AM
 */

class Individual extends Eloquent {
   // protected $guarded = array();
    public static $rules = array(
        'firstname'=>'required',
        'lastname'=>'required',
        'phone'=>'required|unique:individuals',
        'email'=>'required|min:10|unique:individuals'
    );

    public static function validate($data){
        return Validator::make($data, static::$rules);
    }
} 