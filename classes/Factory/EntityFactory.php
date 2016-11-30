<?php
namespace Aston\Factory;
/**
 * Created by PhpStorm.
 */
use Aston\Core\Database ;

class EntityFactory
{
    public static function get($entity_type)
    {
        $manager_class = 'Aston\\Manager\\'.ucfirst($entity_type) . 'EntityManager';
        $entity_class = 'Aston\\Entity\\'.ucfirst($entity_type) . 'Entity';
        $db = Database::getConnection('PDO');
        if(class_exists($entity_class))
        {
            $manager = new $manager_class($db);
            $entity = new $entity_class($manager);
            return $entity;
        }
        else
        {
            throw new \Exception("Mauvais type d'entité donnée à la Factory d'entité");
        }


    }
}