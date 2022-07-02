<?php
namespace App\Models;
/**
 * Created by PhpStorm.
 * User: Loie
 * Date: 1/17/2017
 * Time: 1:53 PM
 */
use Illuminate\Database\Eloquent\Model ;

/**
 * Class Cat
 * @package App\Models
 * @property int id
 * @property int price
 */
class Discount extends Model
{
    public function Product()
    {
        return $this->belongsToMany('App\Models\Product');
    }
}