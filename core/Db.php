<?php
namespace mark\core;

use PDO;

/**
 * Class Db which used to connect and make query to the database.
 */
class Db
{
    /**
     * @var PDO instance.
     */
    protected $connection;

    /**
     * Db constructor create connection with database, and save it to the protected variable $connection.
     *
     * @param string $host
     * @param string $dbname
     * @param string $username
     * @param string $password
     */
    public function __construct(string $host, string $dbname, string $username, string $password)
    {
        try {
            $this->connection = new PDO('mysql:dbname=' . $dbname . ';host=' . $host, $username, $password);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Execute a prepared statement
     *
     * @param string $sql
     * @param array $input_params default empty array
     * @return bool
     */
    public function execute(string $sql, array $input_params = [])
    {
        $sth = $this->connection->prepare($sql);
        return $sth->execute($input_params);
    }

    /**
     * If execute true, return array
     *
     * @param string $sql
     * @param array $input_params default empty array
     * @return array
     */
    public function query(string $sql, array $input_params = [])
    {
        $sth = $this->connection->prepare($sql);
        if (!$sth->execute($input_params)) {
            throw new \PDOException;
        } else {
            return $sth->fetchAll();
        }
    }
}