# Nebula.com è una piattafoma di e-commerce per l'acquisto di videogiochi in formato digitale, che richiama a livello visivo lo stile di GoG.com.
E' stato realizzato con Bootstrap 4 e Laravel 7.x per il progetto di WebDevelopment per la facoltà di Informatica dell'Università degli Studi Di Catania. La piattaforma per ogni singolo utente permette la registrazione e login.Nonchè modifica nickname,avatar e password della sezione profilo.
E' presente una sezione di pagamento che usa Stripe.
Ad ogni registrazione, acquisto,o richiesta reset-password, verrà inviata una mail contenente le informazioni necessarie.
E' presente una sezione amministrativa realizzata con Voyager.

## Prequisiti:
-Composer
-Artisan
-Xammp
  -Apache
-MySql
Su Windows copiare la cartella Nebula nella sottocartella XAMMP:

```\htdocs```

Se non presente installare artisan con il comando:

```composer global require "laravel/installer"```

Da htdocs\nebula:
Per un primo avvio è necessario migrare le tabelle all'interno del database con il comando da terminale:

```php artisan migrate:fresh```

E in seguito popolare il database facendo i seed:

```php artisan db:seed```

E' possibile ora avviare il server tramite XAMMP o se non presente tramite il comando:

```php artisan serve```

e quindi accedervi tramite il proprio localhost:

127.0.0.1:reservedport

Per caricare file ed immagini e permettere un corretto funzionamento della parte parte amministrativa, è necessario configurarla con:

```php artisan voyager:install```

In seguito creare l'account amministatore con il comando:

```php artisan voyager:admin --create```

Dopo aver inserito le informazioni richieste,è adesso possibile effettuare il login nella sezione amministrativa all'indirizzo:

```127.0.0.1:reservedport/admin```

Per effettuare adesso richieste CRUD all'interno del database, quindi inserimento,modifica,cancellazione file all'interno del database è necessario andare su Tools -> BREAD-> e selezionare Add Bread to this Table per la tabella products

Nella finestra appena aperta, sezione -> Controller Name effettuare un overload del controller di base,scritto ad hoc aggiungendo il path: <br>

```App\Http\Controllers\Voyager\ProductsController``` <br>

A questo punto dal menu a tendina è necessiario selezionare Image per il campo Image della tabella products e multiple images per il campo Images della medesima tabella. Salvare

A questo punto dal menu a comparsa a sinistra dovrebbe essere comparso il campo Products.

Entrando nella sezione product è ora possibile effettuare Inserimenti di un nuovo prodotto e upload delle immagini. E' consigliabile effettuare un upload di quest'ultime per evitare di vedere immagini di sample.

Per effettuare richieste CRUD per file relativi ai giochi è necessario andare su Tools -> BREAD-> e selezionare Add Bread to this Table per la tabella Downloads. Nella finestra appena aperta,nella sezione -> Controller Name effettuare un overload del controller di base,scritto ad hoc aggiungendo il path:

```App\Http\Controllers\Voyager\DownloadsController```

Nella voce link selezionare File dal menù a tendina.

E' consigliabile effettuare un upload dei file per renderli disponibili al download una volta effettuato l'acquisto. Per associare i file è sufficiente effettuare un upload di quest'ultimo e associarlo con un prodotto già presente in database,visualizzato dal menù a tendina. Qualora questo non venga caricato,al compratore verrà visualizzata una view del prodotto stesso che notifica l'indisponibilità del download.

### Autore
Nebula.com è stato sviluppato da Sergio Suraci. Studente del corso di Informatica dell' Università degli Studi di Catania.
