<?php
	if(isset($_POST['appetizer']))
		$appetizer = $_POST['appetizer'];
	else $appetizer = $_GET['appetizer'];
	if(isset($_POST['entree']))
		$entree = $_POST['entree'];
	else $entree = $_GET['entree'];
	if(isset($_POST['side']))
		$side = $_POST['side'];
	else $side = $_GET['side'];
	if(isset($_POST['dessert']))
		$dessert = $_POST['dessert'];
	else $dessert = $_GET['dessert'];
	if(isset($_POST['coffee']))
		$coffee = $_POST['coffee'];
	else $coffee = $_GET['coffee'];
	if(isset($_POST['tea']))
		$tea = $_POST['tea'];
	else $tea = $_GET['tea'];
	
	echo '<p>Your Order:</p><ul>';

	/*appetizer*/
	switch($appetizer){
		case 'c1':
			echo '<li>Tomato Gazpacho</li>';
			break;
		case 'c2':
			echo '<li>Caesar Salad</li>';
			break;
		case 'c3':
			echo '<li>Popcorn Shrimp</li>';
			break;
		default:
			echo '<li>No appetizer</li>';
	}

	/*entree*/
	switch($entree){
		case 'c1':
			echo '<li>Porterhouse Steak</li>';
			break;
		case 'c2':
			echo '<li>Grilled Tilapia</li>';
			break;
		case 'c3':
			echo '<li>Chicken Pasta</li>';
			break;
		case 'c4':
			echo '<li>Tofu Burger</li>';
			break;
		case 'c5':
			echo '<li>Ceviche</li>';
			break;
		case 'c6':
			echo '<li>Cobb Salad</li>';
			break;
		default:
			echo '<li>No Entree</li>';
	}

	/*side*/
	switch($side){
		case 'c1':
			echo '<li>Baked Potato</li>';
			break;
		case 'c2':
			echo '<li>Creamed Spinach</li>';
			break;
		case 'c3':
			echo '<li>French Fries</li>';
			break;
		case 'c4':
			echo '<li>Mashed Potatoes</li>';
			break;
		case 'c5':
			echo '<li>Sweet Potato Wedges</li>';
			break;
		default:
			echo '<li>No Side</li>';
	}

	/*dessert*/
	switch($dessert){
		case 'c1':
			echo '<li>Tiramisu</li>';
			break;
		case 'c2':
			echo '<li>Strawberry Shortcake</li>';
			break;
		case 'c3':
			echo '<li>Green Tea Ice Cream</li>';
			break;
		default:
			echo '<li>No Dessert</li>';
	}	

	/*Coffee*/
	if($coffee == 'on')
		echo '<li>Coffee</li>';

	/*Tea*/
	if($tea == 'on')
		echo '<li>Tea</li>';
	echo '</ul>';
	
?>