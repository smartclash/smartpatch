<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 04/12/16
 * Time: 08:43
 */
class PageManager extends CI_Model
{
    public function pageDirector()
    {
        $this->load->model('Auth', '', TRUE);
    }
}