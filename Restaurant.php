<?php
/**
 * Created by PhpStorm.
 * User: Herval
 * Date: 24/12/2018
 * Time: 16:13
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];
}