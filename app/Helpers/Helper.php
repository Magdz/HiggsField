<?php

namespace App\Helpers;

class Helper
{
	public static function upload($file, $module) 
	{
	    $fileExtension = $file->getClientOriginalExtension();
	    $fileName = str_random(15);
	    $fileNameExtension = $fileName . '.' .  $fileExtension;

	    $destinationPath = public_path() . '/uploads/' . $module;

	    $file->move($destinationPath, $fileNameExtension);

	    $fileUrl = url('/') . '/uploads/' . $module . '/' . $fileNameExtension;

	    return [ 
	        'url' => $fileUrl, 
	        'name' => $fileName, 
	        'extension' => $fileExtension,
	        'name.extension' => $fileNameExtension, 
	    ];
	}
}