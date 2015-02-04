<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<style>
		fieldset {
			margin: 20px;
			width: 300px;
		}
		label {
			float: left;
			width: 100px;
			margin-left: 5%;
			margin-right: 10px;
			text-align: right;
		}
		fieldset div {
			padding-top: 5px;
			padding-bottom: 5px;
		}
		#logoff {
			position: fixed;
			top: 0;
			right: 50px;
			width: 100px;
			height: 20px;
			background-color: #CCCCCC;
			text-align: center;
			border-bottom-left-radius: 5px;
			border-bottom-right-radius: 5px;
		}
		#logoff a {
			text-decoration: none;
		}
		#posttext
		{
			font-size: 10pt;
			font-style: italic;
		}
	</style>
</head>
<body>
	
	<h3>Welcome <?= $this->session->userdata['alias'] ?></h3>

	<div id="logout">
		<a href="/main/logout">Logout</a>
	</div>
	
	<fieldset>
			<legend>Quotable Quotes</legend>
			<?php

			foreach($quotes as $quote)

			{ ?>
				 <div>
				 	<p><?= $speaker .": ".$full_quote ?></p><br>
				 	<p id="posttext"><?= $posted_by ?></p>
				 	<form id="add_favorite" action="/main/add/favorite" method="post">
				 		<input type="submit" name="add_favorite" value='Add to My List'>
				 		<input type="hidden" name="add_favorite" value="<?= $this->session->userdata['id'] ?>">
				 	</form> 

				</div>

			<?php }



			?>

					
	</fieldset>
	

		<fieldset>
			<legend>Your Favorites</legend>
		</fieldset>

		
		<form id="post_quote" action="/main/add_quote" method="post">
		
			<fieldset>
				<legend>Contribute a Quote:</legend>
				<div><label for="speaker">Quoted By: </label><input type="text" id="speaker" name="speaker" value="" placeholder="who said it?"></div>

				<div><label for="full_quote">Message: </label><input type="text" id="full_quote" name="full_quote" value="" placeholder="what did they say?"></div>

				<input type="hidden" name="posted_by" value="<?= $this->session->userdata['id'] ?>">
				
				<div><input type="submit" value="Submit"></div>
			
			</fieldset>
		</form>


</body>
</html>