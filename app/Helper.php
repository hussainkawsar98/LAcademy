<?php
// Image Load
function getImage($folder, $value = null)
{

    $url = asset('no_found.jpg');
    $path = public_path($folder . '/' . $value);
    if (!empty($folder) && (!empty($value))) {
        if (file_exists($path)) {
            $url = asset($folder . '/' . $value);
        }
    }
    return $url;
}

function deleteImage($folder = null, $file = null)
{

    if (!empty($folder) && !empty($file)) {
        $path = public_path($folder . '/' . $file);
        $isExists = file_exists($path);
        if ($isExists) {
            unlink($path);
        }
    }
    return true;
}

// Date format
function dateFormat($date){
  return date('d M, y', strtotime($date));
}