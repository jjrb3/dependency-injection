<?php
namespace Database;

use Problem\MysqlAdapter;

class Database
{
    protected $adapter;

    public function __construct()
    {
        $this->adapter = new MysqlAdapter();
    }
}