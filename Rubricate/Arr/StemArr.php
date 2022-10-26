<?php 

namespace Rubricate\Arr;

class StemArr implements IStemArr
{
    public function get($arr, $key, $null = null)
    {
       return (!array_key_exists($key, $arr))? $null: $arr[$key];
    } 
}    

