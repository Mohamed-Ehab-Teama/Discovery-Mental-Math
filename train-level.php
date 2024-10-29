
<?php 
    $title = 'Training Levels';

    require_once('./layouts/header.php');
?>






    <!-- Content -->
    <h2 class="text-center mt-5">
        Chose Level:
    </h2>

    <div class="container text-center mt-5">
        <a href="./levels/level1_LessThan7.php">
            <button type="button" class="btn btn-warning mt-1 text-center" style="width: 40%; font-size: 1.5rem;">
                Less than 7 years
            </button>
        </a>
        <br>
        <a href="./levels/level2_Between7and10.php">
            <button type="button" class="btn btn-warning mt-3 text-center" style="width: 40%; font-size: 1.5rem;">
                From 7 to 10 years
            </button>
        </a>
        <br>
        <a href="./levels/level3_MoreThan10.php">
            <button type="button" class="btn btn-warning mt-3 text-center" style="width: 40%; font-size: 1.5rem;">
                More that 10 years
            </button>
        </a>
    </div>




    <!-- Footer -->
    <?php
        require_once ('./layouts/footer.php');
    ?>