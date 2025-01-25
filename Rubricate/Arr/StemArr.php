<?php 

declare(strict_types=1);

namespace Rubricate\Arr;

class StemArr implements IStemArr
{
    public function get(array $arr, string|int $key, mixed $default = null): mixed
    {
       return $arr[$key] ?? $default;
    } 

    public function keyCount(array $arr, int $mode = COUNT_NORMAL): int
    {
       return count($arr, $mode);
    } 
}    

