<?php

use App\Mail\AuthMail;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;


function logError($error)
{
    Log::error(json_encode($error));
}
function public_id()
{
    return strtoupper(str_shuffle(date('YMDHism') . time()));
}


function responseMessage($status, $data = [], $msg = null, $code = 200)
{
    return response([
        'status' => $status,
        'data' => $data,
        'message' => $msg
    ], $code ?? $status);
}

function pushResponse($status,$msg,$code=201){
    if ($status) {

        return responseMessage(status:$code , data: $status, msg: $msg);
    }
    return responseMessage(status: 204, data: [], msg: 'Operation Failed...');
}

function pushData($data,$msg){
    if ($data->isNotEmpty()) {
        return responseMessage(status: 200, data: $data, msg: $msg);
    }
    return responseMessage(status: 204, msg: ERR_EMT);
}

function randomNumber($len = 7)
{
    return substr(random_int(1, 99999999999999999), 1, $len);
}



function base64Encode($var)
{
    return base64_encode(base64_encode($var));
}
function base64Decode($var)
{
    return base64_decode(base64_decode($var));
}

function getUserPid()
{
    if (auth()->user()) {
        return auth()->user()['pid'];
    }
}
function getUserType()
{
    if (auth()->user()) {
        return auth()->user()['type'];
    }
}



function getUsername()
{
    if (auth()->user()) {
        return auth()->user()['useranme'] ?? auth()->user()['email'];
    }
}



function removeThis($str, $chr = ',')
{
    return rtrim($str, $chr);
}
function getInitials($string = null)
{
    $string = preg_split("/[\s,_-]+/", $string);
    $ret = '';
    foreach ($string as $word)
        $ret .= $word[0];
    return $ret;
}
function dateToAge($date)
{
    return Carbon::parse($date)->age;
    // $date = new DateTime($date);
    // return $date->diff(Carbon::now())
    // ->format('%y years, %m months and %d days');
}


function daysFromNow($d = '+ 1')
{
    return date("Y-m-d", strtotime(" {$d} day"));
}


function confrimYear($year = 18)
{
    // $dt = new Carbon();
    // $before = $dt->subYears($year)->format('Y-m-d');
    return now()->subYears($year)->toDateString();
}




function sprintNumber($num, $pre = 3)
{
    return trim(sprintf("%0{$pre}d\n", $num));
}

function justDate()
{
    return date('Y-m-d');
}

function ampm()
{
    return date('h:i A');
}

function formatDate($date)
{
    if(empty($date)){
        return ;
    }
    return date('d M, Y', strtotime($date));
}

function formatDateTime($date)
{
    if(empty($date)){
        return ;
    }
    return date('d M, Y h:i A', strtotime($date));
}

function shortTime($date)
{
    return date('Y-M-d', strtotime($date));
}
function fullDate()
{
    return date('Y-m-d H:i:s');
}

function timeNow()
{
    return date('H:i');
}

function sendMail($param)
{
    try {
        return Mail::to($param['email'])->send(new AuthMail($param));
    } catch (\Throwable $e) {
        logError($e->getMessage());
        return false;
    }
}


function saveFile($file, $name = null, $path = 'documents')
{
    try {
        // $name = str_replace('/', '-', $name);
        $fileName = uniqueId() . time() . '-' . str_replace('/', '-', $name) . '.' . $file->extension();
        $filePath = "files/{$path}";
        $file->move(public_path($filePath), $fileName);
        return $filePath . '/' . $fileName;
    } catch (\Throwable $e) {
        logError($e->getMessage());
        return false;
    }
}

function saveBase64File($file, $name = 'optimal', $path = 'documents/')
{
    try {
        $ext = explode('/', mime_content_type($file))[1];
        $path = "files/{$path}";
        File::exists($path) ?: File::makeDirectory($path, 0777);
        $filename = $path. $name.'-' . public_id(). '.' . $ext;
        list(, $file_data) = explode(';', $file);
        list(, $file_data) = explode(',', $file_data);
        file_put_contents($filename, base64_decode($file_data));
        return $filename;
    } catch (\Throwable $e) {
        logError($e->getMessage());
        return false;
    }
}

function saveImg($image, $path, $name = null)
{
    try {
        $ext = explode('/', mime_content_type($image))[1];
        list(, $file_data) = explode(';', $image);
        list(, $file_data) = explode(',', $file_data);
        $path = str_replace('files/', '', $path); // find n replace files/  in case of existing path that already conatained since we prepend files/ before returning to avoid files/files
        $destinationPath = public_path("/files/" . $path); // prepend  /files and public path
        File::exists($destinationPath) ?: File::makeDirectory($destinationPath, true);
        $name = $name ?? 'TL' . date('YmdHis.').$ext;
        // uploadImage($image,$name, $destinationPath);
        // file_put_contents($destinationPath, $image);
        if (is_string($image)) {
            $image = base64_decode($file_data);
            file_put_contents($destinationPath . '/' . $name, $image);
        } else {
            $image->move($destinationPath, $name);
        }
        return 'files/' . $path . $name;  // return file path+ file name and prepend files
    } catch (\Throwable $e) {
        logError($e->getMessage());
        return false;
    }
}
