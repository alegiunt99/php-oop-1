<?php

    class Movie {
        
        public $name;
        public $genre;
        public $year;

        
        public $durartion;
        	
        function __construct($_duration) {

            return $this.$durartion = $_duration;

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
    $theNotebook->name = 'The Notebook'

    $theNotebook->genre = 'Romantic'

    $theNotebook->year = 2004;

?>