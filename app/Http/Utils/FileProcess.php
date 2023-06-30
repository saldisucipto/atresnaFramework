<?php

namespace App\Http\Utils;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileProcess
{
    // properties
    protected $fileData;
    protected string $namaFile;
    protected string $dirFile;

    // constructor
    public function __construct($fileData, string $namaFile, string $dirFile)
    {
        $this->fileData = $fileData;
        $this->namaFile = $namaFile;
        $this->dirFile = $dirFile;
    }

    // uploadFilePhoto
    public function uploadFoto()
    {
        // aapbila tidak ada yang di upload tidak melakukan apa apa
        if(is_null($this->fileData)) {
            return;
        }

        $namaFoto = time(). '-'. Str::slug($this->namaFile) . '.'. $this->fileData->getClientOriginalExtension();
        Storage::putFileAs('public/img/' . $this->dirFile, $this->fileData, $namaFoto);
        return $namaFoto;
    }

    // update foto
    public function updateFoto(string $fileSebelumnya)
    {
        // dd(file_exists(storage_path('app\public\img\\' . $this->dirFile . '\\' . $fileSebelumnya)));
        if(file_exists(storage_path('app\public\img\\' . $this->dirFile . '\\' . $fileSebelumnya))) {
            unlink(storage_path('app\public\img\\' . $this->dirFile . '\\' . $fileSebelumnya));
        } else {
            self::uploadFoto();
        }
        if ($this->fileData != null) {
            return self::uploadFoto();
        } else {
            return;
        }
    }

    // delete foto
    public static function deleteFoto(string $fileSebelumnya, string $dirFile)
    {
        if(file_exists(storage_path('app\public\img\\' . $dirFile . '\\' . $fileSebelumnya))) {
            unlink(storage_path('app\public\img\\' . $dirFile . '\\' . $fileSebelumnya));
        } else {
            return;
        }
    }
}
