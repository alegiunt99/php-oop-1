<?php
    class Movie {

        public $name;
        public $genre;
        public $year;
        
       
        public function __construct($_duration) {
            $this->duration= $_duration . 'min';
        }
        
        /*public function howIsOld(){
            
            echo(date("Y"));

            $yearsOld = date("Y") - $this->$year;

            echo($yearsOld);

            return $yearsOld;
        }/*/

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

    echo('<pre>');
    print_r($theHangover);
    echo('</pre>');

    echo('<pre>');
    print_r($theNotebook);
    echo('</pre>');
    
    ?>

