Ciao ragazzi,
Esercizio di oggi: Blocco PHPSnacks cicli
nome repo: php-snacks-blocco-1
All'interno della repo per ogni snack create una sottocartella chiamata snack_NUMERO_SNACK.

## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:

Olimpia Milano - Cantù | 55-60

Svolgimento:
- Creiamo un arrey ed inseriamo come chiave 4 voci: squadra di casa, squadra ospite, punti fatti squadra di casa, punti fatti squadra ospite.
- Stampiamo a schermo le partite utilizzando un ciclo foreach e echo.

## Snack 2
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

Svolgimento:
- Creo un form inserendo method e action per passare i dati
- Ricevo i parametri con un if(isset)
- Utilizzo di strlen per name e str_contains per email e is_numeric per age



## Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z