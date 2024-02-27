<?php
    session_start();
    include('panel/config.php');
?>

<?php require('head.php') ?>



<?php require('header.php') ?>

<main>
    <!-- Page banner area start here -->
    <section class="banner__inner-page bg-image pt-160 pb-160 bg-image" data-background="assets/images/banner/banner-inner-page.jpg">
        <div class="container">
            <h2 class="wow fadeInUp" style="color:#f74f22;" data-wow-delay="00ms" data-wow-duration="1500ms">Our Team</h2>
            <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <a style="color:#f74f22;" href="index.php">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Volunteers</span>
            </div>
        </div>
    </section>
    <!-- Page banner area end here -->


    <?php
            $sql = "SELECT * FROM members";
            $result = $conn->query($sql);
            $row=mysqli_fetch_array($result);
            if(mysqli_num_rows($result) > 0)
            {
        ?>  
            <!-- Cause area start here -->
            <section class="team-area pt-10 pb-120">
                <div class="container">
                    <div class="row">
                            <?php 
                                $query = "SELECT * FROM members ";
                                $query_run = mysqli_query($conn, $query);

                                if (mysqli_num_rows($query_run) > 0)
                                {
                                    foreach ($query_run as $data)
                                    {
                            ?>                                                                          
                                   <div class="col-sm-3 col-sm-3 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="team__item image">
                                            <img src="panel/members/<?= $data['image'];?>" alt="image">
                                            <div class="team__content">                                                
                                                <div class="content">
                                                    <h4><a href="javascript:void(0);" class="primary-hover"><?= $data['name'];?></a></h4>
                                                    <span><?= $data['role'];?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                                                           
                            <?php
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </section>
            <!-- Cause area end here -->
            <?php   
            }
            else
            {
                echo  "nothing to show";
            }                                                                    
        ?> 
</main>
<?php require('footer.php') ?>