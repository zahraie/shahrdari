<?php
namespace App\Models;
/**
 * Created by PhpStorm.
 * User: Loie
 * Date: 1/17/2017
 * Time: 1:57 PM
 */
use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property string name
 * @property int cat_id
 */
class Subcat extends Model
{
    public function Cat()
    {
        return $this->belongsTo('App\Models\Cat');
    }
    public  function Product()
    {
        return $this->hasMany('App\Models\Product');
    }
}