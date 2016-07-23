<?php

/**
 * @copyright sota1235
 */

/**
 * Class PostController
 */
class PostsController extends AppController
{
    /** @var array */
    public $helpers = ['Html', 'Form'];

    /**
     * action index
     */
    public function index()
    {
        $this->set('posts', $this->Post->find('all'));
    }
}
