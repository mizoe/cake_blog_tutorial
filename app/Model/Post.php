<?php
/**
 * Created by PhpStorm.
 * User: tr
 * Date: 2016/09/16
 * Time: 10:18
 */

class Post extends AppModel {
    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );
}
