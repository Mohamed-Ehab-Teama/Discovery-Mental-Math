<?php $title = 'Level'; ?>

<?php require_once __DIR__ . '\header.php'  ?>



<!-- Content -->
    <h2 class="text-center mt-5">
        Chose Level:
    </h2>

    <div class="container text-center mt-5">
        <a href=<?php echo $path . 'levels\level1.php'; ?>>
            <button type="button" class="btn btn-warning mt-1 text-start" style="width: 40%; font-size: 1.5rem;">
                &nbsp; Level 1 &nbsp; <sub>(Easy)</sub>
            </button>
        </a>
        <br>
        <a href=<?php echo $path . 'levels\level2.php'; ?> >
            <button type="button" class="btn btn-warning mt-3 text-start" style="width: 40%; font-size: 1.5rem;">
                &nbsp; Level 2 &nbsp; <sub>(Intermidate)</sub>
            </button>
        </a>
        <br>
        <a href=<?php echo $path . 'levels\level3.php'; ?> >
            <button type="button" class="btn btn-warning mt-3 text-start" style="width: 40%; font-size: 1.5rem;">
                &nbsp; Level 3 &nbsp; <sub>(Hard)</sub>
            </button>
        </a>
    </div>




    <?php require_once __DIR__ . '\footer.php'  ?>

   