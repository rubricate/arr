<?php

namespace Rubricate\Arr;

interface IKeyCount
{
    public function keyCount(array $arr, int $mode = COUNT_NORMAL): int;
}

