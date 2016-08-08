<?php
namespace mark\core\interfaces;

/**
 * Interface IModel.
 *
 * @author Grigory Alexandrov <alexaandrovp@gmail.com>
 * @link https://github.com/alexaandrov
 */
interface IModel
{
    /**
     * Find all notes in the database.
     * @return mixed
     */
    public function findAll();

    /**
     * Find notes by id in the database.
     * @param $id
     * @return mixed
     */
    public function findById($id);

    /**
     * Create in the database notes.
     * @return mixed
     */
    public function create();

    /**
     * Update notes in the database.
     * @return mixed
     */
    public function update();

    /**
     * Delete notes from the database.
     * @return mixed
     */
    public function delete();

    /**
     * Saves changes.
     * @return mixed
     */
    public function save();
}