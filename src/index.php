<!DOCTYPE html>
<html>
<head>
	<title>Création de maisons</title>
  	<link rel="stylesheet" href="style.css">
</head>
<body>

	<div class="container">
			<form method='POST'>
				<p class="text">Création de maisons</p>
				<input type='text' placeholder="Number my house 1:" name='numMyHouse1' value=<?php $numMyHouse1 ?> ><br><br> 
				<input type='text' placeholder="Number my house 2:" name='numMyHouse2' value= <?php $numMyHouse2 ?>><br><br>
				<input type='submit' value='Soumission'>
			</form>
		<!-- ombres -->
			<div class="drop drop-1"></div>
			<div class="drop drop-2"></div>
			<div class="drop drop-3"></div>
			<div class="drop drop-4"></div>
			<div class="drop drop-5"></div>
	</div>
	
	<?php
		// Définition de la classe MyHouse 
		class MyHouse {
			public $color;
			public $size;

			public function __construct($color, $size) {
				$this->color = $color;
				$this->size = $size;
			}

			public function generate() {
				// Génère le code HTML pour dessiner la maison
				return "<div style='background-color:{$this->color}; width:{$this->size}px; height:{$this->size}px'></div>";
			}
		}

		// Définition de la sous-classe MyHouse1
		class MyHouse1 extends MyHouse {
			public function __construct($size) {
				parent::__construct("red", $size);
			}
		}

		// Définition de la sous-classe MyHouse2
		class MyHouse2 extends MyHouse {
			public function __construct($size) {
				parent::__construct("blue", $size);
			}
		}

		// Récupération des données du formulaire
		$numMyHouse1 = isset($_POST['numMyHouse1']) ? $_POST['numMyHouse1'] : "";
		$numMyHouse2 = isset($_POST['numMyHouse2']) ? $_POST['numMyHouse2'] : "";


		// Création des maisons
		if (isset($_POST['numMyHouse1']) && isset($_POST['numMyHouse2'])) {
			$numMyHouse1 = $_POST['numMyHouse1'];
			$numMyHouse2 = $_POST['numMyHouse2'];

		?>	
			
			<h2 class="maisons_créées"><?php echo "Maisons créées:";?></h2>
			<hr>

		<?php
		
			// Création des maisons de type 1
			for ($i = 0; $i < $numMyHouse1; $i++) {
				$myHouse1 = new MyHouse1(100);
				echo $myHouse1->generate();
			}

			// Création des maisons de type 2
			for ($i = 0; $i < $numMyHouse2; $i++) {
				$myHouse2 = new MyHouse2(200);
				echo $myHouse2->generate();
			}
		}
	
		?>

</body>
</html>