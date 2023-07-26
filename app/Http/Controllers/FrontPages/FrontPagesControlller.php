<?php

namespace App\Http\Controllers\FrontPages;

use App\Http\Controllers\Controller;
use App\Http\Utils\Meta;
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
        $meta = new Meta('websiteku', 'websitekumantep', '/storage/img/company/1688973722-admin-atresna-creative.jpg');
        return view('index', ['companyInfo' => $companyInfo[0], 'sliders' => $sliders, 'title' => Meta::getTitle()]);
    }
}
