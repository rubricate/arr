<?php 

declare(strict_types=1);

namespace Rubricate\Arr;

class StemArr implements IStemArr
{
    public function get($arr, $key, $null = null)
    {
        if(!is_array($arr)){
            throw new \Exception(
                'Oops! Expects parameter 1 to be array'
            );
        }

       return $arr[$key] ?? $null;
    } 

    public function keyCount($arr, $mode = 0): int
    {
       return (!is_array($arr))? 0: count($arr, $mode);
    } 
}    

