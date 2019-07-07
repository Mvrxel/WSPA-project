<?php

namespace App\Http\Controllers\Crud;

use App\Http\Repositories\BaseRepository;

use App\Posts;

class PostsRepository extends BaseRepository {

    public function __construct(Posts $model) {
        $this->model = $model;
    }

}

?>