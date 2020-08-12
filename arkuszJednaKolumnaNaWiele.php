
    <?php
	//r - Otwiera plik do odczytu, ustawia wskaźnik na początku. Plik musi być wcześniej utworzony.
	$nazwa="zdjeciaWieleWierszy.csv";
		if(@fopen($nazwa,"r")){
		$uchwyt=fopen($nazwa,"r");
		$odczyt=fread($uchwyt,filesize($nazwa));//Można zamiast filesize wpisać np. 2.
		$odczytZastapienie = str_replace(', ', '","', $odczyt);
		
		
		//w - Otwiera plik do zapisu. Ustawia wskaźnik na początek pliku. Usuwa dotychczasową zawartość pliku. Jeżeli brakuje pliku to go tworzy.
		$nazwa="foto.csv";
		
		$uchwyt=fopen($nazwa,"w");
		fwrite($uchwyt,$odczytZastapienie);
		echo "Pomyślnie zapisano do pliku.";
		
		}
		else echo "Brak pliku.";
	?>

