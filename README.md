<p align="center">
    <a href="https://getbootstrap.com" target="_blank"><img src="https://miro.medium.com/v2/resize:fit:400/1*onZhQJU7A3ab6V1sHfMRkQ.jpeg" height="150"></a>
    <a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" height="150"></a>
    <a href="https://sass-lang.com/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Sass_Logo_Color.svg/1200px-Sass_Logo_Color.svg.png" height="150"></a>
</p>

# Laravel Boolfolio - API

Continuiamo a lavorare sul codice dei giorni scorsi, ma in una nuova repo.  
L’esercizio di oggi è suddiviso in milestone ed è importante che ne seguiate l’ordine.  

## Milestone 1
nome repo 1: `laravel-api`  
Aggiungiamo al nostro progetto Laravel una nuovo Api/ProjectController.  
Questo controller risponderà a delle richieste via API e si occuperà di restituire la lista dei progetti presenti nel database in formato json.  

## Milestone 2
Testiamo la chiamata API tramite Postman e assicuriamoci di ricevere i dati correttamente.  

## Milestone 3
nome repo 2: `vite-boolfolio`
Iniziamo ad occuparci della parte front-office della nostra applicazione: creiamo un nuovo progetto Vue 3 con Vite e installiamo axios. Colleghiamo questo progetto ad una repo separata.  

## Milestone 4
Nel componente principale della nostra Vue App facciamo una chiamata API all’endpoint costruito nel progetto Laravel (milestone 1) e recuperiamo tutti i progetti dal nostro back-end.  
Stampiamo in console i risultati e verifichiamo di ricevere i dati correttamente.  

## Bonus - da realizzare SOLO una volta completate tutte le milestone precedenti
Creiamo un nuovo componente ProjectCard, che corrisponde ad una card per visualizzare un progetto. Utilizziamo questo componente per visualizzare tutti i progetti ricevuti tramite API.