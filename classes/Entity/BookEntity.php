<?php
namespace Aston\Entity;
use Aston\Manager\BookEntityManager;
/**
 * Class Book Contains information Book Title author description.
 */
class BookEntity implements EntityInterface
{
    private $id;
    private $title;
    private $author;
    private $description;

    protected $manager;
    public function __construct(BookEntityManager $manager)
    {
        $this->manager = $manager;
    }

    public function save()
    {
        $this->manager->addBook($this);
    }
    public function load($id)
    {

//        if (is_numeric($id))
//        {
//            $this->manager->getBook($id);
//        }
//        elseif (is_array($id))
//        {
//            $this->manager->getBooks($id);
//        }
//        else
//        {
//            throw new Exception("Mauvais format de donnée pour la methode load().");
//        }

    }

    public function delete()
    {

    }
    public function create()
    {

    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $id = (int)$id;
        if ($id > 0) {
            $this->id = $id;
        }

    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $author = htmlentities($author);
        if (strlen($author) <= 15) {
            $this->author = $author;
        } else {
            throw new Exception("Le nom de l'uter ne peut pas dépasser 15 caractères.");
        }
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $description = htmlentities($description);
        if (strlen($description) <= 255) {
            $this->description = $description;
        } else {
            throw new Exception('La description ne peut pas dépasser 255 caractères.');
        }
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $title = htmlentities($title);
        if (strlen($title) <= 50) {
            $this->title = $title;
        } else {
            throw new Exception('Le titre ne peut pas dépasser 50 caractères.');
        }
    }


}