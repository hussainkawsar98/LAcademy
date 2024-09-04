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
function dateFormat($date)
{
    return date('d M, Y', strtotime($date));
}
function setStatus($status)
{
    $class_name = null;
    switch ($status) {
        case 'Active':
            $class_name = 'badge-success';
            break;
        case 'Inactive':
            $class_name = 'badge-danger';
            break;
        case 'Upcoming':
            $class_name = 'badge-info';
            break;
        default:
            $class_name = null;
            break;
    }
    return $class_name;
}
