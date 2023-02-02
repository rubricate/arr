<?php 

namespace Rubricate\Arr;

class StemArr implements IStemArr
{
    public function get($arr, $key, $null = null)
    {
       return (!array_key_exists($key, $arr))? $null: $arr[$key];
    } 

    public function keyCount($arr, $mode = 0)
    {
       return (!is_array($arr))? 0: count($arr, $mode);
    } 
}    

