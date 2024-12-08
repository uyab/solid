<?php

class CrudException extends \Exception
{
}

abstract class Crud
{
    protected $table;

    public function delete()
    {
        // delete from $this->table where id = $this->id from database
    }
}

class ArticleCrud extends Crud
{
    protected $table = 'articles';
}

class GuestUserCrud extends Crud
{
    protected $table = 'view_guest_users';

    public function delete()
    {
        throw new \Exception('You cannot delete a guest user');
    }
}

class CrudCollection
{
    protected array $models = [];

    public function add(Crud $model)
    {
        $this->models[] = $model;
    }

    public function deleteAll()
    {
        foreach ($this->models as $model) {
            try {
                $model->delete();
            } catch (\CrudException $e) {

            }
        }
    }
}

$collection = new CrudCollection();
$collection->add(new ArticleCrud());
$collection->add(new GuestUserCrud());
$collection->deleteAll();



