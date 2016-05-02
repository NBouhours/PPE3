<?php
class page_base_securisee_famille extends page_base {

	public function __construct($p) {
		parent::__construct($p);
	}
	public function affiche() {
		
		parent::affiche();
		
	}
	public function affiche_menu() {

		parent::affiche_menu();

		echo "<pre>";
		print_r($_SESSION);
		echo "</pre>";
		?>
			<li><a href="modif_famille.php">Gestion de la Familles </a>
			<li><a href="">Gestion des Enfants </a>
				<ul>
						<li><a href="ajout_enfant.php">Inscrire un enfant</a></li>
						<li><a href="suppr_enfant.php">Désinscrire un enfant</a></li>
						<li><a href="liste_enfant.php">Consulter les enfants</a></li>
				</ul>
			</li>
	
		<?php 

	}
}
