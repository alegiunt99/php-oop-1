


<?php
    class Movie {

        public $name;
        public $genre;
        public $year;
        
       
        public function __construct($_duration) {
            $this->duration= $_duration . 'min';
        }
        
        public function howIsOld(){
            

            $yearsOld = date("Y") - $this->year;


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

    echo('<div class="movie">');
        echo('<p> Name: ' . $theHangover->name . '</p>');
        echo('<p> Genre: ' . $theHangover->genre . '</p>');
        echo('<p> Duration: ' . $theHangover->duration . '</p>');
        echo('<p> Il film ' . $theHangover->name . ' è uscito ' . $theHangover->howIsOld() . ' anni fa</p>');
    echo('</div>');

    echo('<hr>');

    echo('<div class="movie">');
        echo('<p> Name: ' . $theNotebook->name . '</p>');
        echo('<p> Genre: ' . $theNotebook->genre . '</p>');
        echo('<p> Duration: ' . $theNotebook->duration . '</p>');
        echo('<p> Il film ' . $theNotebook->name . ' è uscito ' . $theNotebook->howIsOld() . ' anni fa</p>');
    echo('</div>');
    
    ?>

