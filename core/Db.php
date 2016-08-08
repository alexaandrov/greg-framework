<?php
namespace mark\core;

use PDO;
use mark\core\exceptions\DbException;

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
     * @throws DbException
     */
    public function __construct(string $host, string $dbname, string $username, string $password)
    {
        try {
            $this->connection = new PDO('mysql:dbname=' . $dbname . ';host=' . $host, $username, $password);
        } catch (\PDOException $e) {
            throw new DbException('The connection is not established.');
        }
    }

    /**
     * Execute a prepared statement.
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
     * Execute query to the data and return data array or array of the objects.
     *
     * @param string $sql
     * @param array $input_params
     * @param string $class
     * @return array
     * @throws DbException
     */
    public function query(string $sql, array $input_params = [], string $class = null)
    {
        $sth = $this->connection->prepare($sql);
        if (!$sth->execute($input_params)) {
            throw new DbException('Database query error.');
        }
        if (empty($class)) {
            return $sth->fetchAll();
        } else {
            return $sth->fetchAll(PDO::FETCH_CLASS, $class);
        }
    }
}