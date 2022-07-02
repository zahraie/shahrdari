<?php
namespace App\Models;
/**
 * Created by PhpStorm.
 * User: Loie
 * Date: 1/17/2017
 * Time: 2:09 PM
 */
 use Illuminate\Database\Eloquent\Model;

 /**
  * Class Comment
  * @package App\Models
  * @property int id
  * @property int user_id
  * @property int product_id
  * @property string content
  * @property int status
  */
 class Comment extends Model
 {
     public function User()
     {
         return $this->belongsTo('App\User');
     }
     public function Product()
     {
         return $this->belongsTo('App\Models\Product');
     }
 }