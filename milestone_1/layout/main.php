<main class="main_bg" >

    <div class="container">
        <div class="row justify-content-center py-5">

        <?php 
            foreach ($disks as $disk) { ?>
                
                <?php foreach ($disk as $single) { ?>

                    <div class="col-2 offset-1 m-2 text-center px-2 py-1">

                        <div class="card bg-dark h-100 p-3">
                            <img src="<?php echo $single["poster"] ?>" class="card-img-top" alt="<?php echo $single["title"] ?>">
                            <div class="card-body p-0">

                                <h3 class="card-title my-2"><?php echo $single["title"] ?></h3>
                                <div class="card-text mt-2 p-0 m-0"><?php echo $single["author"] ?></div>
                                <div class="card-text p-0 m-0"><?php echo $single["year"] ?></div>
                                
                            </div>
                        </div>

                    </div>

            <?php   } ?>

        <?php } ?>


            
        </div>
    </div>  

</main>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  