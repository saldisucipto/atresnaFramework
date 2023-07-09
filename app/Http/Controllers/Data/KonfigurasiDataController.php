<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class KonfigurasiDataController extends Controller
{
    // METHOD GET DATA
    public static function ambilDataTunggal(Model $dataModel, array $relation = [])
    {
        if ($relation != []) {
            $data = $dataModel::find(1)->with($relation);
        } else {
            $data = $dataModel::find(1);
        }
        return $data;
    }
}
