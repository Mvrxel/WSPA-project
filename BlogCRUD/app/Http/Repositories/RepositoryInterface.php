<?php

namespace App\Http\Repositories;

interface RepositoryInterface {

    public function getAll($columns = array('*'));

    public function create(array $data);

    public function update(array $data, $id);

    public function find($id, $columns = array('*'));

    public function delete($id);
}

?>