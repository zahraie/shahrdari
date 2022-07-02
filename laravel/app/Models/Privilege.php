<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 * @package App\Models
 * @property int id
 * @property int user_id
 * @property int product_id
 * @property string content
 */
class Privilege extends Model
{
    protected  $table = "privileges";
     public function User()
     {
         return $this->hasMany('App\User');
     }
}