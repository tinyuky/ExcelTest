<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use File;
use Excel;



class ExcelController extends Controller
{
    public function get(){
        return view('import');
    }

    public function excelhandle(Request $request){
        $file = $request->file('excel');
        $name_of_file = $file->getClientOriginalName();
        Storage::disk('public_upload')->put($name_of_file, File::get($file));   
        $data = Excel::load('public\uploads\excel\\'.$name_of_file, function($reader){
            $result = $reader->get();
            $result[309]->dump();
        });
    }
}
