<?php include "includes/header.php"; ?>
<?php include "includes/db.php"; ?>

    <!-- Navigation -->
    
<?php include "includes/navigation.php"; ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            
            <div class="col-md-8">
                <h1 class="page-header">
                    DOTSEL
                    <small>Innovative It Firm</small>
                </h1>
                

                <h1 class="page-header">
                    DOTSEL
                    <small>Innovative It Firm</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href=""><?php echo $post_title; ?></a>
                </h2>
                <p class="lead">
                    by <?php echo $post_user; ?>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date; ?></a></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image; ?>" alt="">
                <hr>
                <p><?php echo $post_content; ?></p>


                <hr>
    
        <?php } ?>

                
            </div>

            
            
            
            
            
            <!-- Blog Sidebar Widgets Column -->
            
<?php include "includes/sidebar.php"; ?>

        </div>
        <!-- /.row -->

        <hr>


<?php include "includes/footer.php"; ?>