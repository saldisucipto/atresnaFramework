<?php

namespace App\Http\Controllers\FrontPages;

use App\Http\Controllers\Controller;
use App\Models\CompanyInfo;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontPagesControlller extends Controller
{
    // Home Pages
    public function index()
    {
        $companyInfo = CompanyInfo::where('id', 1)->get(['company_name', 'company_slogan', 'company_logo']);
        $sliders = Slider::get();
        return view('index', ['companyInfo' => $companyInfo[0], 'sliders' => $sliders]);
    }
}
