<?php 
namespace App\Helpers;
class base_url{
    public static function url($slug)
    {
        return 'http://127.0.0.1:8001/api/'.$slug;
    }
}
?>