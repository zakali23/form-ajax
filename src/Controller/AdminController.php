<?php

namespace Controller;

/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 15:38
 */
class AdminController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('Admin/index.html.twig');
    }
}
