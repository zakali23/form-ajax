<?php
/**
 * Created by PhpStorm.
 * User: zak
 * Date: 22/06/18
 * Time: 13:37
 */
namespace Model;

class FormManager extends EntityManager
{
    const TABLE = 'form';

    /**
     * FormManager constructor.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }

}