<?php

namespace CRUD\Helper;

class DBConnector
{

    /** @var mixed $db */
    private $db;

    public function __construct()
    {

    }

    /**
     * @throws \Exception
     * @return void
     */
    public function connect() : void
    {

    }

    /**
     * @param string $query
     * @return bool
     */
    public function execQuery(string $query) : bool
    {
        return true;
    }

    /**
     * @param string $message
     * @throws \Exception
     * @return void
     */
    private function exceptionHandler(string $message): void
    {

    }
}