<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<link rel="stylesheet" href="css/style2.css">
<script src="js/style2.js"></script>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarColor01">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item ">
				<a class="nav-link" href="#" onclick="window.location.href='HomePage.html'">Home </a>
			</li>
      
		</ul>
		<ul class="navbar-nav ">
		<li class="nav-item">
		<button type="button" onclick="window.location.href='main.html'"class="btn   my-2 my-lg-0 ">Return</button>
		</li>
		<li class="nav-item">
		<button type="button" onclick="self.close()" class="btn ">Close</button>
		</li>
		</ul>
		
	</div>

	
</nav>

<?php 
if (extension_loaded ('PDO')) {
	echo 'PDO OK'; 
} 
else {
	echo 'PDO KO'; 
}
$dsn = 'mysql:host=localhost;dbname=classe;port=3306;charset=utf8';
try{
	$pdo = new PDO($dsn, 'root' , '');
}
catch(PDOException $exception){
	exit('Erreur de connexion à la base de données');
}
?>


<?php
for($i=0; $i < $nobject; $i++)
{
	$array = array_fill(0, 1, $aobject[$i]);
	$search = join(',',array_fill(0, count ($array), '?'));
	$query = $pdo->prepare("SELECT * FROM `classename` WHERE name LIKE " .$search);
	$query->execute($array);
	$resultat = $query->fetchAll();
	print("<table border=\"1\">");
	foreach($resultat as $key =>$variable)
	{
		print("<tr>");
		print("<td>".$resultat[$key]['name']."</td>");
		print("<tr>");
	}
	print ("</table>");

}
?>
<div class="container " >

    <div class="row form-group product-chooser">
		
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
		<div class="card mb-3 border-primary"  style="max-width: 20rem;"  data-toggle="modal" data-target="#myPomme"> 
			
				<img src="pomme.png" class="card-img-top" width="250px" height="250px" alt="Card image">
			
			<div class="card-footer text-white bg-primary">
				Pomme 
			</div>
		</div>
		</div>
		
		 
    	
    	
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
		<div class="card mb-3 border-primary"  style="max-width: 20rem;"  data-toggle="modal" data-target="#myBottle"> 
				<img src="Bouteille4.JPG" class="card-img-top" width="250px" height="250px" alt="Card image">
			<div class="card-footer text-white bg-primary">
				Bouteille 
			</div>
		</div>
		</div>
		
		
    	
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
		<div class="card mb-3 border-primary" style="max-width: 20rem;"  data-toggle="modal" data-target="#mySpoon"> 
				<img src="cuillere.png" class="card-img-top" width="250px" height="250px" alt="Card image">
			<div class="card-footer text-white bg-primary">
				Cuillère 
			</div>
		</div>
		</div>
		
		
    	    
    	
    </div>
</div>


<div class="container">

    <div class="row form-group product-chooser disabled">
        
    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
		<div class="card mb-3 border-primary"  style="max-width: 20rem;"  data-toggle="modal" data-target="#myLivre"> 
				<img src="livre.png" class="card-img-top" width="250px" height="250px"  alt="Card image">
			<div class="card-footer text-white bg-primary">
				Livre 
			</div>
		</div>
		</div>
		
    	
    	
    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
		<div class="card mb-3 border-primary"  style="max-width: 20rem;"  data-toggle="modal" data-target="#myBaD"> 
				<img src="brossedent.png" class="card-img-top"  width="250px" height="250px" alt="Card image">
			<div class="card-footer text-white bg-primary">
				Brosse à dent
			</div>
		</div>
		</div>
		
		
		
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    	<div class="card mb-3 border-primary" style="max-width: 20rem;"   data-toggle="modal" data-target="#myPlante"> 
				<img src="plante.png" class="card-img-top" width="250px" height="250px" alt="Card image">
			<div class="card-footer text-white bg-primary">
				Plante
			</div>
		</div>
		</div>
    	
		

	</div>	

</div>

<div class="container">
  

  <!-- The Modal -->
  <div class="modal" id="myPlante">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header"><h4 class="modal-title"> Je cherche la plante? </h4>
		
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         
		  <img id="profile-img" class="rounded center " src="Pepper-Ask.JPG" style="width:250px;height:350px;" />
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Non je change d'avis!</button>
		  <button type="button" class="btn btn-primary" data-dismiss="modal">Oui vas-y!</button>
        </div>
        
      </div>
    </div>
  </div>
  
  <!-- The Modal -->
  <div class="modal" id="myBaD">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header"><h4 class="modal-title"> Je cherche la brosse à dent? </h4>
		
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         
		  <img id="profile-img" class="rounded center " src="Pepper-Ask.JPG" style="width:250px;height:350px;" />
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Non je change d'avis!</button>
		  <button type="button" class="btn btn-primary" data-dismiss="modal">Oui vas-y!</button>
        </div>
        
      </div>
    </div>
  </div>
  <!-- The Modal -->
  <div class="modal" id="myLivre">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header"><h4 class="modal-title"> Je cherche le livre? </h4>
		
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         
		  <img id="profile-img" class="rounded center " src="Pepper-Ask.JPG" style="width:250px;height:350px;" />
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Non je change d'avis!</button>
		  <button type="button" class="btn btn-primary" data-dismiss="modal">Oui vas-y!</button>
        </div>
        
      </div>
    </div>
  </div>
  <!-- The Modal -->
  <div class="modal" id="mySpoon">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header"><h4 class="modal-title"> Je cherche la cuillère? </h4>
		
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         
		  <img id="profile-img" class="rounded center " src="Pepper-Ask.JPG" style="width:250px;height:350px;" />
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Non je change d'avis!</button>
		  <button type="button" class="btn btn-primary" data-dismiss="modal">Oui vas-y!</button>
        </div>
        
      </div>
    </div>
  </div>
  <!-- The Modal -->
  <div class="modal" id="myBottle">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header"><h4 class="modal-title"> Je cherche la bouteille? </h4>
		
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         
		  <img id="profile-img" class="rounded center " src="Pepper-Ask.JPG" style="width:250px;height:350px;" />
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Non je change d'avis!</button>
		  <button type="button" class="btn btn-primary" data-dismiss="modal">Oui vas-y!</button>
        </div>
        
      </div>
    </div>
  </div>
  <!-- The Modal -->
  <div class="modal" id="myPomme">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header"><h4 class="modal-title"> Je cherche la pomme? </h4>
		
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         
		  <img id="profile-img" class="rounded center " src="Pepper-Ask.JPG" style="width:250px;height:350px;" />
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Non je change d'avis!</button>
		  <button type="button" class="btn btn-primary" data-dismiss="modal">Oui vas-y!</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>