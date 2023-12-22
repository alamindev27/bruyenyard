<?php namespace App\Services;
use Illuminate\Support\Facades\Log;

/**  * Logger class  */
class Logger
{
    public function __construct()
    {
        $this->path = env('ERROR_LOG_PATH');
    }

    public function log($type, $text = '', $timestamp = true)
    {
//        if ($timestamp) {
//            $datetime = date("d-m-Y H:i:s");
//            $text = "$datetime, $type: $text \r\n\r\n";
//        } else {
//            $text = "$type\r\n\r\n";
//        }
//        error_log($text, 3, $this->path);
        try {
            if(gettype($text) == 'array'){
                $text = json_encode($text);
            }
            if ($timestamp) {
                $datetime = date("d-m-Y H:i:s");
                $text = "$datetime, $type: $text \r\n\r\n";
            } else {
                $text = "$type\r\n\r\n";
            }
            if (!empty($this->path)) {
                error_log($text, 3, $this->path);
            } else {
                Log::info($text);
            }
        } catch (\Exception $e) {
            Log::info("log exception");
        }
    }

}

