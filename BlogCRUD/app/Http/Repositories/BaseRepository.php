<?php

namespace App\Http\Repositories;

use App\Http\Repositories\RepositoryInterface;

abstract class BaseRepository implements RepositoryInterface {

    protected $model;

    public function getAll($columns = array('*')) {
        return $this->model->get($columns);
    }

    public function create(array $data) {
        return $this->model->create($data);
    }

    public function update(array $data, $id) {
        return $this->find($id)->update($data);
    }

    public function find($id, $columns = array('*')) {
        return $this->model->find($id, $columns);
    }

    public function delete($id) {
        return $this->model->find($id)->delete();
    }

    public function params($input, array $output) {
        return collect($input)->only($output)->toArray();
    }

    public function where($parm1, $parm2) {
        return $this->model->get()->where($parm1, $parm2);
    }

}

?>