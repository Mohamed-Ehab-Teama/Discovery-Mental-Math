
<?php 
    $title = 'Training ';

    require_once('./layouts/header.php')
?>




    <!-- Content -->
    <h1 class="text-center mt-5">
        Mental Math Training
    </h1>

    <div class="container text-center mt-5">
        <a href="./Competition.php">
            <button style="width: 70%; font-size: 2.5rem;" class="btn btn-warning"> Go To the Competition </button>
        </a>
    </div>

    <div class="container text-center mt-5">
        <a href="./train-level.php">
            <button style="width: 40%; font-size: 2rem;" class="btn btn-warning"> Start Training </button>
        </a>
    </div>




    <!-- Footer -->
    <?php
        require_once ('./layouts/footer.php');
    ?>