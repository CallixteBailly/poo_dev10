<?php
	require 'vendor/autoload.php';

	use Aston\Factory\EntityFactory;


/*	function my_autoloader($class) {
        $class = 'classes/' . str_replace('\\', '/', $class) .'.php';
        if(file_exists($class)){
            include $class;
		}

	}

	spl_autoload_register('my_autoloader');*/

//	$db = Database::getConnection('PDO');
//	$manager = new BookEntityManager($db);
//	$book = new BookEntity($manager);
//	$book->setTItle("RUBRIQUE-A-BRAC. 1");
//	//$book->setAuthor("Arthur");
//	//$book->setDescription("Arthur est un jeune aventurier qui parcours le monde à la recherche d'une épée imaginaire. Cette quête qu'il mène ne savers pas utile pour sa vie. FIN");
//	//print $book->getTitle();
//    $book->save();

	$book = EntityFactory::get('bd');
	$book->setTItle("RUBRIQUE-A-BRAC. 1");
	$book->save();
	Kint::dump($book);

//	$user = EntityFactory::get('user');
//  $author = new authorEntity($manager);


	print '<br/> Hello world !!';
?>
