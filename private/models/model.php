<?php
/**
 * Model
 *
 * In dit bestand zet je ALLE functions die iets met data of de database doen
 *
 */


/**
 * Deze function wordt gebruikt voor het ajax search voorbeeld
 */
function searchTitels($text)
{
    $database = dbConnect();
    // filter de data die binnenkomt
    $text = htmlspecialchars($text);

    // select alleen de titels die overeen komen
    $get_titel = $database->prepare("SELECT titel FROM posts WHERE titel LIKE concat('%', :titel, '%')");

    // execute de query
    $get_titel->execute(array('titel' => $text));

    $results = [];

    // laat de titels op de pagina zien
    while ($titels = $get_titel->fetch(PDO::FETCH_ASSOC)) {
        $results[] = $titels;
    }

    return $results;
}

function getAllBlogPosts() {

	$database = dbConnect();

	// Haal alles op uit de table 'huisjes'
	$statement = $database->query('SELECT * FROM `blog` ORDER BY `id` DESC');

	$results = [];

	// laat de titels op de pagina zien
	while ($blogPost = $statement->fetch(PDO::FETCH_ASSOC)) {
		$results[] = $blogPost;
	}

	return $results;

}
function getBlogPost($id){
    $database = dbConnect();
    $statement = $database->prepare('SELECT * FROM `blog` WHERE `id` = ?');
    $data = [$id];
    $statement->execute($data);

    $blogPost = $statement->fetch(PDO::FETCH_ASSOC);

    return $blogPost;

}

function agenda(){
    $database = dbConnect();
    $statement = $database->query('SELECT * FROM `events` ORDER BY `id` DESC');

    $results = [];

    while ($events = $statement->fetch(PDO::FETCH_ASSOC)) {
        $results[] = $events;
    }

    return $results;


}


function getHouse($id){
	$database = dbConnect();

	// Haal het huisje met de opgegeven id op uit de database
	$statement = $database->prepare('SELECT * FROM `huisjes` WHERE id = ?');
	$data = [$id];
	$statement->execute($data);

	$huisje = $statement->fetch(PDO::FETCH_ASSOC);

	return $huisje;
}

/**
 * Haal alle agenda / evenementen
 * @return array
 */
function getAllEvents(){
	$database = dbConnect();

	// Haal alles op uit de table 'huisjes'
	$statement = $database->query('SELECT * FROM `events` ORDER BY `datum` ASC');

	$results = [];

	// laat de titels op de pagina zien
	while ($evenement = $statement->fetch(PDO::FETCH_ASSOC)) {
		$results[] = $evenement;
	}

	return $results;
}

//Searchbar
function search_database($searchterm)
{

    $result = [];
    $pdo = dbConnect();
    $sql = "SELECT * FROM blog WHERE naam LIKE :search_term OR tekst LIKE :search_term";

    $statement = $pdo->prepare($sql);
    $parameters =
        [
            'search_term' => '%' . $searchterm . '%'
        ];

    $statement->execute($parameters);

    //Statements voorbereiden (Prepared statements)

    foreach ($statement as $blogpost) {
        $rij = [];
        $rij ['type'] = 'blogpost';
        $rij ['title'] = $blogpost['naam'];
        $rij ['short'] = $blogpost['short'];
        $rij ['id'] = $blogpost['id'];

        $result[] = $rij;
    }
    return $result;
}

