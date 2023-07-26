<?php

namespace App\Http\Controllers\FrontPages;

use App\Http\Controllers\Controller;
use App\Models\CompanyInfo;
use Illuminate\Http\Request;

class FrontPagesControlller extends Controller
{
    // Home Pages
    public function index()
    {
        $companyInfo = CompanyInfo::where('id', 1)->get(['company_name', 'company_slogan', 'company_logo']);
        return view('index', ['companyInfo' => $companyInfo[0]]);
    }
}
