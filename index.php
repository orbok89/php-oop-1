<?php
    class Movie{
        public $name;
        public $director;
        function __construct($_name, $_director)
        {
            $this->name=$_name;
            $this->director=$_director;
        }
        public function getDirector(){
            return $this->director;
        }
    };

    $film_1 = new Movie('i soliti ignoti','Monicelli');
    $film_2 = new Movie('900', 'bertolucci');
    var_dump($film_1);
    var_dump($film_2);
    echo $film_1->getDirector();



?>