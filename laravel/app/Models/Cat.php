<?php
namespace APP\Models;
/**
 * Created by PhpStorm.
 * User: Loie
 * Date: 1/17/2017
 * Time: 1:53 PM
 */
 use Illuminate\Database\Eloquent\Model ;

 /**
  * Class Cat
  * @package APP\Models
  * @property int id
  * @property string name
  */
 class Cat extends Model
 {
     public  function Subcat()
     {
         return $this->hasMany('App\Models\Subcat');
     }
 }