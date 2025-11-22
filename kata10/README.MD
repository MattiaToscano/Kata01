Scrivi una funzione denominata imposta setAlarm/set_alarm/set-alarm/setalarm (a seconda del linguaggio) che riceve due parametri. Il primo parametro, employed, è vero ogni volta che sei impiegato e il secondo parametro, vacation è vero ogni volta che sei in vacanza.

La funzione dovrebbe tornare vera se sei impiegato e non in vacanza (perché queste sono le circostanze in cui è necessario impostare un allarme). Dovrebbe restituire falso altrimenti. Esempi:


employed | vacation 
true     | true     => false
true     | false    => true
false    | true     => false
false    | false    => false