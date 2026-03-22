<?php
require_once 'includes/header.php';
?>

<?php 

    /* TO-DO: Include header.php
              Hint: header.php is inside the includes folder and already connects to the database
    */



    /*
	 * Retrieve toy information from the database based on the toy ID.
	 * 
	 * @param PDO $pdo       An instance of the PDO class.
	 * @param string $id     The ID of the toy to retrieve.
	 * @return array|null    An associative array containing the toy information, or null if no toy is found.
	 */
	function get_toys(PDO $pdo) {
        $sql = "SELECT * FROM toy;";
        $toys = pdo($pdo, $sql)->fetchAll();
        return $toys;
    }

    $toys = get_toys($pdo);                      // Retrieve info about toy with ID '0001' from the database using provided PDO connection
?>


<section class="toy-catalog">

	<?php foreach ($toys as $toy): ?>
    <!-- TOY CARD START -->
    <div class="toy-card">
  	    <!-- TO-DO: Create a hyperlink to toy.php and pass the toy number as a URL parameter
                    Hint: Access the value from the $toy1 array (what is the column name in the database?) -->
  	    <a href="toy.php?toynum=<?= $toy['toyID'] ?>">

  		    <!-- TO-DO: Display the toy image and update the alt text to the toy name
                        Hint: Access the values from the $toy1 array (what are the column names in the database?) -->
  			<img src="<?= $toy['img_src'] ?>" alt="<?= $toy['name'] ?>">
  		</a>

  		<!-- TO-DO: Display the name of the toy
                    Hint: Access the value from the $toy1 array (what is the column name in the database?) -->
  		<h2><?= $toy['name'] ?></h2>

  		<!-- TO-DO: Display price of toy 
                    Hint: Access the value from the $toy1 array (what is the column name in the database?) -->
  		<p>$<?= $toy['price'] ?></p>
  	</div>
    <!-- TOY CARD END -->
	<?php endforeach; ?>
    <!-- TO-DO: Display the rest of the toys in the database

                Hint 1: You could copy/paste the toy-card block for each toy, but this would be repetitive.

                Hint 2: Instead, how could you modify the get_toy() function so it returns ALL toys
                        from the database instead of just one?

                Hint 3: Once you have an array of toys, how could you use a PHP loop to display
                        each toy inside a toy-card?
    -->



</section>

<?php include 'includes/footer.php'; ?>
