<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<img src="https://img.shields.io/badge/template-tested-green" alt="Build Status">
<img src="https://img.shields.io/badge/laravel-10.10-red" alt="Laravel 10.10" />
<img src="https://img.shields.io/badge/bootstrap-5.3.2-red" alt="Bootstrap 5.3.2" />
<img src="https://img.shields.io/badge/vite-5.00-red" alt="Vite 5.00" />
<br>
<img src="https://img.shields.io/badge/license-boolean_95-blue" alt="Licensed to Boolean Students #95" />
<img src="https://img.shields.io/badge/license-boolean_109-blue" alt="Licensed to Boolean Students #109" />
<img src="https://img.shields.io/badge/license-boolean_125-blue" alt="Licensed to Boolean Students #125" />
</p>

# INFO

Questo git-template fornisce lo scaffold di una web application realizzata con Laravel 10, Blade, SCSS e Bootstrap. 

- [Documentazione Laravel 10.x](https://laravel.com/docs/10.x).

# SETUP INIZIALE

- Creare un repository a partire da questo template, cliccando in alto a destra sul pulsantone verde `Use this template` e poi su `Create a new repository`
- Clonare il repository appena creato sul proprio PC
- Da phpMyAdmin creare un database, importarvi i dati e segnarvi il nome dato al DB
- Creare un file `.env`. Si può procedere copiandolo da `.env.example`
- Per creare la APP_KEY nel `.env`, lanciare il comando dedicato, ma prima installare le dipendenze composer
	```bash
    composer install
	php artisan key:generate
	```
 - Installare anche le dipendenze NPM
	```bash
	npm i
	```
- Ri-controllare che tutti i dati nel `.env` siano corretti (attenzione al database!)
- Lanciare il progetto tramite il server built-in di PHP
	```bash
	php artisan serve
	```
- Lanciare vite
	```bash
	npm run dev
	```
- Puntare il browser all'indirizzo mostrato in terminale per controllare che tutto funzioni.


Da chiedere: 
	Per clonare devo usare git clone https://github.com/LucaAgatinoPrivitera/laravel-template ma se invece non volessi avere la cartella dentro la cartella?
	Nei controller e treni, use App\Models\Train; Train sta per il nome del file giusto?
		class Train invece è il nome della classe che poi devo usare in $trains = Train::all(); giusto?




CONSEGNA
Creare un'applicazione laravel dotata di migrazione e seeder per creare e popolare una tabella di test.

PREPARAZIONE
Create la repo partendo dal template.
Create un database relativo all'app su phpMyAdmin.
Impostate i dati del DB sul file di environment.

MIGRATION
Creiamo la Migration per la tabella trains. Ogni treno dovrà avere:
Azienda
Stazione di partenza
Stazione di arrivo
Orario di partenza
Orario di arrivo
Codice Treno
Numero Carrozze
In orario
Cancellato
Potrebbero essere necessarie altre colonne per far funzionare la tabella nel modo corretto... :occhiolino:
Lanciate la migration per creare la tabella. In caso di problemi:
php artisan migrate:reset
Modificate la migration e la lanciate nuovamente con
php artisan migrate

MVC
Inserite per ora i dati nella tabella tramite PhpMyAdmin. Basteranno 2 treni di prova.
Ora create Model e Controller per mostrare nella home page tutti i treni che sono in partenza dalla data odierna, un pò come abbiamo fatto ieri.
Il giro completo sarà sempre: Route -> Controller che usa Model e passa i dati a -> View che stampa

SEEDER
Aggiungete ora un seeder che popoli la tabella.
Provate ad aggiungere un record a mano, poi divertitevi con un ciclo e FakerPHP.