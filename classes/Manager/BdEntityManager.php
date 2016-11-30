<?php
/**
 * Created by PhpStorm.
 * User: aston
 * Date: 30/11/16
 * Time: 11:56
 */

namespace Aston\Manager;
use Aston\Entity\EntityInterface;

class BdEntityManager extends BookEntityManager
{
    public function __construct(\PDO $db)
    {
        parent::__construct($db);
    }

    public function addBook(EntityInterface $entity)
    {
        $query = $this->db->prepare('INSERT INTO book (title,author,body,illustrator) VALUES (:title,:author,:body,:illustrator)');
        $query->bindValue(':title', $entity->getTitle());
        $query->bindValue(':author', $entity->getAuthor());
        $query->bindValue(':body', $entity->getDescription());
        $query->bindValue(':illustrator', $entity->getIllustrator());


        $executed = $query->execute();
        //$error = $db->errorInfo();
        //Kint::dump($error);
        //Kint::dump($executed);
    }
}