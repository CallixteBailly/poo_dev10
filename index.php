<?php
	//require 'vendor/autoload.php';
	//require 'classes/EntityFactory.php';

	function __autoload($class)
	{
		$class = 'classes/' . str_replace('\\', '/', $class) .'.php';
		var_dump($class);
		if (file_exists($class))
		{
            require $class;
		}
	}

//	$db = Database::getConnection('PDO');
//	$manager = new BookEntityManager($db);
//	$book = new BookEntity($manager);
//	$book->setTItle("RUBRIQUE-A-BRAC. 1");
//	//$book->setAuthor("Arthur");
//	//$book->setDescription("Arthur est un jeune aventurier qui parcours le monde à la recherche d'une épée imaginaire. Cette quête qu'il mène ne savers pas utile pour sa vie. FIN");
//	//print $book->getTitle();
//    $book->save();

	$book = \Factory\EntityFactory::get('book');
	$book->setTItle("RUBRIQUE-A-BRAC. 1");
	$book->save();
	//Kint::dump($book);

//	$user = EntityFactory::get('user');
//  $author = new authorEntity($manager);


	print '<br/> Hello world !!';
?>
