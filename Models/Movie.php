<?php 
    class Movie {
        private int $id;
        public string $title;
        public string $category;
        public string $cover;
        public float $rating;
        public function __construct(int $id, string $title, string $category, string $cover,float $rating) {
            $this->id = $id;
            $this->title = $title;
            $this->category = $category;
            $this->cover = $cover;
            $this->rating = $rating;
            
        }
        public function approximateRating($raiting){
            $newRating= round($raiting,1);
            echo $newRating;
        }
    }
