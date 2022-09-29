# Procedura per DB gestito su Laravel

* creazione di un DB con PhpMyAdmin
* Configurazione di .env con le credenziali del DB
* Creazione delle migrazioni php artisan make:migration create_tabellas_table
* Definizione dei campi della tabella nella migrazione
* Lancio delle migrazioni con php artisan migrate

(Eventuali rollback con php artisan migrate:rollback - torna indietro solo del batch con numero maggiore )
