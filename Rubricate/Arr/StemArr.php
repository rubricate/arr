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

    public function random(array $arr, int $num = 1): mixed
    {
        if (empty($arr) || $num < 1) {
            return $num === 1 ? null : [];
        }

        $keys = array_rand($arr, min($num, count($arr)));

        if (is_array($keys)) {
            return array_map(fn($key) => $arr[$key], $keys);
        }

        return $arr[$keys];
    }

    public function only(array $arr, array $keys): array
    {
        return array_intersect_key($arr, array_flip($keys));
    }

}    

