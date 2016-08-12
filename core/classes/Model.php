<?php
namespace core\classes;

/**
 * Basic model
 *
 * @author Grigory Alexandrov <alexaandrovp@gmail.com>
 * @link https://github.com/alexaandrov
 */
abstract class Model
{

    /**
     * Find all notes in the database.
     * @return mixed
     */
    public function findAll()
    {
        // TODO: Implement findAll() method.
    }

    /**
     * Find notes by id in the database.
     * @param $value
     * @return mixed
     */
    public function findByPk($value)
    {
        // TODO: Implement findById() method.
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