<?php

class FileCreator
{
    public $_path; /* FOR DEFAULT PATH */
    function credit()
    {
        $_txt = "
/*
|
|   FILE CREATOR BY ROMBAX FAMILY BREBES JAWA TENGAH
|
|   Creator  : Izzat alharis
|   Phone    : (+62) 813-9355-2220
|   Email    : izzatalharis@gmail.com
|   Github   : https://github.com/my-store
|
*/\n\n\n";
        return $_txt;
    }
    function __construct($_path = "")
    {
        if(!empty($_path)) {
            if(!file_exists($_path)) {
                mkdir($_path);
            }
            $this->_path = $_path;
        }
        else {
            $this->_path = "my_files";
            if(!file_exists($this->_path)) {
                mkdir($this->_path);
            }
        }
    }
    function create($_fname = "", $_ftype = "")
    {
        if(!empty($_fname ) && !empty($_ftype))
        {
            $_f = fopen($this->_path."/".$_fname.".".$_ftype, "w")
                or die("Failed to create $_fname.$_ftype file! \n");
            fwrite($_f,$this->credit());
            fclose($_f);
            echo "$_fname.$_ftype was created successfully! \n";
        }
        else {
            echo "Silahkan isi nama dan ekstensi file yang akan dibuat! \n";
        }
    }
}

// Instansiasi class FileCreator
$__ROMBAX__ = new FileCreator(
    /* 
    |
    |   Silahkan isi nama folder didalam tanda kutip dibawah 
    |   yang nantinya akan dibuat 
    |   untuk menyimpan file, atau biarkan saja kosong.
    |   Jika kosong, folder akan dibuatkan otomatis
    |   dengan nama 'my_files'.
    |
    */
    ""
);

// Tulis didalam tanda kutip dibawah ini nama file yang akan dibuat
$_namaFile = "";
// Tulis didalam tanda kutip dibawah ini jenis/ ekstensi file yang akan dibuat
$_ekstensiFile = "";

// Mulai membuat file
$__ROMBAX__ -> create($_namaFile,$_ekstensiFile);


