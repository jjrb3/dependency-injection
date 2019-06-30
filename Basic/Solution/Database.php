<?php
namespace Database;

use Solution\MysqlAdapter;


class Database
{
    protected $adapter;

    public function __construct(MysqlAdapter $mysqlAdapter)
    {
        $this->adapter = $mysqlAdapter;
    }
}