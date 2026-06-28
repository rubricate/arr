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

    public function isMulti(array $arr): bool
    {
        foreach ($arr as $value) {
            if (is_array($value)) {
                return true;
            }
        }

        return false;
    }

    public function isAssoc(array $arr): bool
    {
        return !array_is_list($arr);
    }

    public function sort(array $arr): array
    {
        asort($arr);
        return $arr;
    }

    public function sortDesc(array $arr): array
    {
        arsort($arr);
        return $arr;
    }

}    

