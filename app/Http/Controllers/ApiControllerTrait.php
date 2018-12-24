<?php
/**
 * Created by PhpStorm.
 * User: Herval
 * Date: 24/12/2018
 * Time: 16:17
 */

namespace App\Http\Controllers;


trait ApiControllerTrait
{
    public function index()
    {
        $results = $this->model->paginate();

        return response()->json($results);
    }
}