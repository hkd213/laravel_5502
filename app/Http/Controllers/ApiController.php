<?php
/**
 * Created by PhpStorm.
 * User: hkd
 * Date: 16.09.16
 * Time: 15:00
 */

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;


class ApiController extends BaseController
{
    public function index()
    {
        return 'user';
    }
}