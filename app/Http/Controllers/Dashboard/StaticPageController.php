<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    // function create static pages
    public function createStaticPage()
    {
        $view_folder_path = resource_path() . '/views/';
        $data = scandir($view_folder_path);
        $cek_file = fopen($view_folder_path . 'pages.blade.php', 'w');

        // route update
        $data_route = base_path('routes/');
        $cek_route = fopen($data_route . 'web.php', 'a+');
        file_put_contents(strval($cek_route), 'Isi fil saklsakjskakske');
        echo 'File berhasil dibuat.';
        dd($cek_route);

        if ($cek_file === false) {
            echo 'Gagal membuat file.';
        } else {
            fwrite($cek_file, 'Isi file');
            fclose($cek_file);
            echo 'File berhasil dibuat.';
        }


        print_r($data);
        dd('create statiic pages');
    }
}
