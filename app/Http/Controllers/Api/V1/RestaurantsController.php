<?php
/**
 * Created by PhpStorm.
 * User: Herval
 * Date: 24/12/2018
 * Time: 16:15
 */

namespace App\Http\Controllers\Api\V1;


use App\Http\Controllers\ApiControllerTrait;
use App\Restaurant;
use Laravel\Lumen\Routing\Controller;

class Restauransontroller extends Controller
{
    use ApiControllerTrait;

    protected $model;

    public function __construct(Restaurant $model)
    {
        $this->model = $model;
    }
}