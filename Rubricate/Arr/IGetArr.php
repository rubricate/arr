<?php 

namespace Rubricate\Arr;

interface IGetArr
{
    public function get(array $arr, string|int $key, mixed $default = null): mixed;
}    

