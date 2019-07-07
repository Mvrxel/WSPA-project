<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Crud\PostsRepository;

class CrudController extends Controller {

    public function __construct(PostsRepository $postRepository) {
        $this->postsRepository = $postRepository;
    }

    public function index() {
        $posts = $this->postsRepository->getAll();
        return view('home',['posts' => $posts]);
    }

    public function admin() {
        $posts = $this->postsRepository->getAll();
        return view('admin',['posts' => $posts]);
    }
}