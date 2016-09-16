<?php
/**
 * Created by PhpStorm.
 * User: tr
 * Date: 2016/09/16
 * Time: 10:25
 */

class PostsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('posts', $this->Post->find('all'));
    }
}
