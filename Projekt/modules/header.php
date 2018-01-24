<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Projekt-Kino.pl - <?= $title ?> </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/shop-homepage.css" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
	<script type="text/javascript">
function loading () {
document.getElementById("rezerwacja").innerHTML += "<?php include 'scripts/loadingfbase.php';?>";
var i,j,n;
var wiersze = "<?php echo $rowy; ?>";
var tablica = <?php echo json_encode($zmienna); ?>;
for(i=1;i<=8;i++){

for(j=1;j<=9;j++){
	document.getElementById("rezerwacja").innerHTML += "<div id=ij class=\"poler\" style=\"float:left\">puste</div>";
	document.getElementById("ij").id = i+""+j;
	for(n=0;n<wiersze;n++){
	if (document.getElementById(i+''+j).id.toString()==tablica[n])
	{
		document.getElementById(i+''+j).innerHTML = "zajęte";
		document.getElementById(i+''+j).style.backgroundColor = "red";
	}
	}
	
	
};
document.getElementById("rezerwacja").innerHTML += "<div id=ij class=\"poler\" style=\"clear:initial\">puste</div>";
document.getElementById("ij").id = i+""+j;
	for(n=0;n<wiersze;n++){
	if (document.getElementById(i+''+j).id.toString()==tablica[n])
	{
		document.getElementById(i+''+j).innerHTML = "zajęte";
		document.getElementById(i+''+j).style.backgroundColor = "red";
	}
	}

	}
		var klasa = document.getElementsByClassName("poler");
	for (i=0;i<klasa.length;i++){
		klasa[i].addEventListener("click",rezerw,true);
};

}
var tablica = new Array();
var index=0;
function rezerw() {
	if(this.style.backgroundColor != "red" && this.style.backgroundColor != "yellow")
	{
	tablica[index++]=this.id;
	this.style.backgroundColor = "yellow";
	this.innerHTML = "zaklepane";
	document.getElementById("bil").value = index;
	document.getElementById("cen").value = 20*index;
		
	}
}
function sprawdzenie() {
var imie = getElementById("usr").value;
var nazwisko = getElementById("naz").value;
if (!isNaN(imie)){
	document.getElementById("formularz").innerHTML += "Źle wprowadzone imię";
	return false;
}
else
if (!isNaN(nazwisko)){
	document.getElementById("formularz").innerHTML += "Źle wprowadzone nazwisko";
	return false;
}
else
	return true;
}
</script>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="?page=home"><i class="fas fa-film"></i> Projekt-Kino</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="?page=home"><i class="fas fa-home"></i> Strona Główna
                  <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=repertoire"><i class="fas fa-calendar-alt"></i> Repertuar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=reservation"><i class="fas fa-calendar-check"></i> Rezerwacja</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="?page=contact"><i class="far fa-envelope"></i> Kontakt</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

   


