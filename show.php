<?php
function showCV()
{ ?>


    <div class="row m-6 justify-content-center">
        <?php include 'conn/config.php';
        $query = mysqli_query($db, 'select * from people');
        while ($row = mysqli_fetch_assoc($query)) {

            $name = $row['name'];
            $detail = $row['detail'];
            $img = $row['img'];
            $c = $row['cv'];
            $email = $row['email'];


        ?>
            <div class="card m-5" style="width: 20rem; background-color: dark;">
                <br>
                <img class="card-img-top w-50 mx-auto rounded-circle" src="people/<?php echo $img; ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $name; ?></h5>
                    <p class="card-text"><?php echo $detail; ?></p>
                    <a href="cv/<?php echo $c; ?>" download class="btn btn-primary button-card-cv mr-2 ">Personal CV</a>
                    <a href="mailto:<?php echo $email; ?>" download class="btn btn-danger button-card-contact ml-2">Contact</a>
                </div>
            </div>
        <?php } ?>
    </div>
<?php } ?>


<?php
function showJob()
{ ?>


    <div class="row m-6 justify-content-center">
        <?php include 'conn/config.php';
        $query = mysqli_query($db, 'select * from job');
        while ($row = mysqli_fetch_assoc($query)) {

            $name = $row['name'];
            $email = $row['email'];
            $information = $row['information'];
            $requirement = $row['requirement'];


        ?>
            <div class="card m-5" style="width: 20rem; background-color: dark;">
                <h5 class="card-header"><?php echo $name;?></h5>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $requirement;?></h5>
                    <p class="card-text"><?php echo $information;?></p>
                    <a href="mailto:<?php echo $email;?>" class="btn btn-primary">countact</a>
                </div>
            </div>
        <?php } ?>
    </div>
<?php } ?>