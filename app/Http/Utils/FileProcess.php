<?php

namespace App\Http\Utils;

use Illuminate\Support\Facades\Storage;

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

        $namaFoto = time(). '-'. $this->namaFile . '-'. $this->fileData->getClientOriginalName();
        Storage::putFileAs('public/img/' . $this->dirFile, $this->fileData, $namaFoto);
        return $namaFoto;
    }

    // update foto
    public function updateFoto(string $fileSebelumnya)
    {
        if (file_exists(storage_path('\public\img\\' . $this->dirFile . '\\' . $fileSebelumnya))) {
            file_exists(unlink(storage_path('\public\img\\' . $this->dirFile . '\\' . $fileSebelumnya)));
        } else {
            self::uploadFoto();
        }
        if ($this->fileData != null) {
            return self::uploadFoto();
        } else {
            return;
        }
    }
}
