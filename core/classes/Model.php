<?php
namespace meepo\core\classes;

/**
 * Basic model
 *
 * @author Grigory Alexandrov <alexaandrovp@gmail.com>
 * @link https://github.com/alexaandrov
 */
abstract class Model
{
    /**
     * Database instance.
     * @var Db
     */
    private $db;

    /**
     * Model constructor.
     */
    public function __construct()
    {
        $this->db = new Db('localhost', 'php2.local', 'root', '');
    }

    /**
     * Find all notes in the database.
     * @return mixed
     */
    public function findAll()
    {
        return $this->db->query(
            'SELECT * FROM '
            . static::TABLE,
            [],
            static::class
        );
    }

    /**
     * Find notes by id in the database.
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        return $this->db->query(
            'SELECT * FROM  '
            . static::TABLE
            . ' WHERE id = :id',
            [':id' => $id],
            static::class
        );
    }

    /**
     * Create in the database notes.
     * @return mixed
     */
    public function create()
    {
        // TODO: Implement create() method.
    }

    /**
     * Update notes in the database.
     * @return mixed
     */
    public function update()
    {
        // TODO: Implement update() method.
    }

    /**
     * Delete notes from the database.
     * @return mixed
     */
    public function delete()
    {
        // TODO: Implement delete() method.
    }

    /**
     * Saves changes.
     * @return mixed
     */
    public function save()
    {
        // TODO: Implement save() method.
    }
}