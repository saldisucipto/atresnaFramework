<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use App\Models\KategoriProduk;
use Illuminate\Http\Request;

class MasterDataController extends Controller
{
    protected $dataModel;

    // _constructor
    public function __construct(Object $dataModel)
    {
        $this->dataModel = $dataModel;
    }

    // METHOD GET DATA
    public function ambilSemuaData(array $relation = [])
    {
        if($relation != []) {
            $data = $this->dataModel->with($relation)->paginate(10);
        } else {
            $data = $this->dataModel->paginate(10);
        }
        return $data;
    }



}
