<?php
/**
 * Created by PhpStorm.
 * User: aston
 * Date: 30/11/16
 * Time: 14:36
 */

namespace Aston\Manager;


use Aston\Entity\EntityInterface;

abstract class EntityManager
{

    abstract public function addEntity(EntityInterface $entity);
    abstract public function getEntity($id);
    abstract public function getEntities(array $ids);
}