<?php

namespace Rokhy\core;

class Paginator
{
    public static function paginate(array $data, int $page = 1, int $perPage = 10): array
    {
        $offset = ($page - 1) * $perPage;
        return array_slice($data, $offset, $perPage);
    }
}
