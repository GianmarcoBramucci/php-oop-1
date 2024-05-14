<?php 
    include __DIR__ . "/Views/header.php";
    include __DIR__ . "/Models/Movie.php";
    include __DIR__ . "/Controll/seamp.php";
    $movie1 = new Movie($movie1Php['id'],$movie1Php['title'],$movie1Php['category'],$movie1Php['cover'],$movie1Php['rating']);
    $movie2 = new Movie($movie2Php['id'],$movie2Php['title'],$movie2Php['category'],$movie2Php['cover'],$movie2Php['rating']);
?>
<main>
   <div>
        <h4><?php echo $movie1->title?></h4>
        <h6><?php echo $movie1->category?></h6>
        <p><?php $movie1->approximateRating($movie1->rating)?></p>
        <img src=<?php echo $movie1->cover ?> alt="">
   </div>
   <div>
        <h4><?php echo $movie2->title?></h4>
        <h6><?php echo $movie2->category?></h6>
        <p><?php $movie2->approximateRating($movie2->rating)?></p>
        <img src=<?php echo $movie2->cover ?> alt="">
   </div>
  
</main>
<?php
    include __DIR__ . "/Views/footer.php";
?> 

