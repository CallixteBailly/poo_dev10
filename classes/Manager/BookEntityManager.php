<?php
namespace Aston\Manager;
/**
 * Class
 */

use Aston\Entity\BookEntity;
use Aston\Entity\EntityInterface;

class BookEntityManager
{
    protected $db;
    public function __construct(\PDO $db)
    {
        //lKint::dump($db);
        $this-> db = $db;
    }

    public function addEntity(EntityInterface $entity)
    {

/*        $query = $this->db->prepare('INSERT INTO book (title,author,body) VALUES (:title,:author,:body)');
        $query->bindValue(':title', $book->getTitle());
        $query->bindValue(':author', $book->getAuthor());
        $query->bindValue(':body', $book->getDescription());


        $executed = $query->execute();*/
        //$error = $db->errorInfo();
        //Kint::dump($error);
        //Kint::dump($executed);
    }
    public function getEntity($id)
    {

    }
    public function getEntities(array $ids)
    {

    }
}