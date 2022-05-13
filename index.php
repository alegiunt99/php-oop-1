


<?php
    class Movie {

        public $name;
        public $genre;
        public $year;
        
        // allego duration al construct
        public function __construct($_duration) {
            $this->duration= $_duration . 'min';
        }
        
        // creo una funzione che calcola quanto tempo fa è uscito il film
        public function howIsOld(){
            
            // faccio la data odierna con date("Y") meno l'anno di uscita del film
            $yearsOld = date("Y") - $this->year;

            // e ottengo gli anni passati
            return $yearsOld;
        }

    }

    

    // Creo 2 film
    $theHangover = new Movie(99);

    $theNotebook = new Movie(123);

    // elementi dei film

    // The Hangover 
    $theHangover->name = 'The Hangover';

    $theHangover->genre = 'Comedy';

    $theHangover->year = 2009;

    // The Notebook
    $theNotebook->name = 'The Notebook';

    $theNotebook->genre = 'Romantic';

    $theNotebook->year = 2004;


    // stampo i dati di The Hangover
    echo('<div class="movie">');
        echo('<p> Name: ' . $theHangover->name . '</p>');
        echo('<p> Genre: ' . $theHangover->genre . '</p>');
        echo('<p> Duration: ' . $theHangover->duration . '</p>');
        echo('<p> Il film ' . $theHangover->name . ' è uscito ' . $theHangover->howIsOld() . ' anni fa</p>');
    echo('</div>');

    echo('<hr>');


    //stampo i dati di The notebook
    echo('<div class="movie">');
        echo('<p> Name: ' . $theNotebook->name . '</p>');
        echo('<p> Genre: ' . $theNotebook->genre . '</p>');
        echo('<p> Duration: ' . $theNotebook->duration . '</p>');
        echo('<p> Il film ' . $theNotebook->name . ' è uscito ' . $theNotebook->howIsOld() . ' anni fa</p>');
    echo('</div>');
    
    ?>

