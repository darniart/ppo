          <br/>
			<body onload="loading()">
			<div class="col-md-8">
					<div id="rezerwacja"></div>
					<div id="formularz">
				<br>
						<form action="scripts/loadingtbase.php" method="post" onsubmit="return sprawdzenie()">
						 Imię:<input type="text" name="imie" class="form-control" id="usr" required>
						Nazwisko:<input type="text" name="nazwisko" class="form-control" id="naz" required>
						Ilość biletów<input type="text" name="bilety" id="bil" class="form-control" value=0 readonly style="width:70px">
						Cena:<input type="text" name="cena" id="cen" class="form-control" readonly style="width:70px">
						<input type="hidden" name="rzad" id="rzad">
						<input type="hidden" name="miejsce" id="miejsce">
						<input type="submit" class="form-control" id="naz">
						</form>

					</div>
            </div>