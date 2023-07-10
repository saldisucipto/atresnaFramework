<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use App\Http\Utils\FileProcess;
use App\Models\CompanyInfo;
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

    public function updateCompanyInfo(Request $request)
    {
        $data = $request->all();
        $companyInfo = CompanyInfo::find(1);

        $companyInfo->company_name = $data['company_name'];
        $companyInfo->company_phone = $data['company_phone'];
        $companyInfo->company_phone1 = $data['company_phone1'];
        $companyInfo->company_email = $data['company_email'];
        $companyInfo->company_npwp = $data['company_npwp'];
        $companyInfo->company_address = $data['company_address'];
        if ($request->file('company_logo')) {
            FileProcess::deleteFoto($companyInfo->company_logo, 'company');
            $logo = new FileProcess($request->file('company_logo'), $data['company_name'], 'company');
            $companyInfo->company_logo = $logo->uploadFoto();
        }
        $companyInfo->update();
        return redirect()->back()->with('message', 'Berhasil Update Data');
    }
}