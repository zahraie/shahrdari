<?php

namespace App;
/**
 * Created by PhpStorm.
 * User: Loie
 * Date: 1/17/2017
 * Time: 2:09 PM
 */
use Illuminate\Database\Eloquent\Model;
/**
 * Class Contact
 * @package App\Models
 * @property int id
 * @property string title
 * @property string description
 * @property int subcat_id
 */
class Contact extends Model
{
    public function Subcat()
    {
        return $this->belongsTo('App\Models\Subcat');
    }
    public  function Comment()
    {
        return $this->hasMany('App\Models\Comment');
    }
    public function Discount()
    {
        return $this->belongsToMany('App\Models\Discount');
    }
}
