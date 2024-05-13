<?php 
    include __DIR__ . "/Views/header.php";
    include __DIR__ . "/Models/Movie.php";
    $movie1 = new Movie(7,'ciao','lorem',5.5);
    $movie1->changeId(3);
?>
<main>
    <p><?php echo $movie1->printid()?></p>
</main>
<?php
    include __DIR__ . "/Views/footer.php";
?> 

