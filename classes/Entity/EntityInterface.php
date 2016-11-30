<?php
/**
 * Created by PhpStorm.
 * User: aston
 * Date: 30/11/16
 * Time: 14:11
 */

namespace Aston\Entity;


interface EntityInterface
{

    public function create();
    public function load($id);
    public function save();
    public function delete();
}