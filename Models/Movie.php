<?php 
    class Movie {
        private int $id;
        public string $title;
        public string $category;
        public float $rating;
        public function __construct(int $id, string $title, string $category,float $rating) {
            $this->id = $id;
            $this->title = $title;
            $this->category = $category;
            $this->rating = $rating;
        }
        public function print(){
            echo 'ok';
        }
        public function starRating($raiting){
            echo $raiting;
        }
        public function printid(){
            echo $this->id;
        }
        public function changeId($newId){
             $this->id=$newId;
        }
    }
