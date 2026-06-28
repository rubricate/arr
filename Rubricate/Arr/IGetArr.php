<?php

declare(strict_types=1);

namespace Rubricate\Arr;

interface IGetArr
{
    public function get(array $arr, string|int $key, mixed $default = null): mixed;
}

