<?php get_header();?>

      <!--becuse the nav have fixe position than use the below tag for  from top-->
        <!--this is post section of site-->
        <div class='container-fluid mt-5 p-3 pt-4  bg-flat-8'>
            <div class='row '>
                <div class='col-11 col-md-8 mx-auto mx-md-4'>
                    <?php if(have_posts()){
                            while(have_posts()){
                                the_post();
                            ?>
                        <section class='my-3 '>
                        <header class='bg-flat-1 text-flat-7 p-3 pr-5 text-right' >
                            <h3 class='text-flat-2'><?php the_title()?> </h3>
                        </header>
                        <article class='bg-flat-7 p-4 text-right'>
                            <figure class='text-center'>
                            <img alt='' src='<?php the_post_thumbnail_url();?>' class='rounded img-fluid'></figure>
                            <?php the_excerpt();?>
                          </article>
                        <footer class='bg-flat-13 p-2 d-flex  align-item-center justify-content-center justify-content-md-around  flex-wrap direct-rtl'>
                            <a href='#'class='text-dark mx-2 mx-md-0'>
                            <div class='bg-flat-6 p-2 d-flex align-item-center mb-1 '> 
                                <i class='fa fa-home fa-lg p-1'></i>
                                <span class='p-1 text-nowrap '>نویسنده:<?php echo get_the_author();?></span>
                            </div></a>
                            <a href='#' class='text-dark mx-2 mx-md-0'>
                                <div class='bg-flat-9 p-2 d-flex align-item-center mb-1'> 
                                <i class='fa fa-home fa-lg p-1'></i>
                                <span class='p-1 text-nowrap'>تاریخ: <?php echo get_the_date();?></span>
                            </div></a>
                            <a href='#' class='text-dark mx-2 mx-md-0'>
                                <div class='bg-flat-4 p-2 d-flex align-item-center mb-1 '> 
                                <i class='fa fa-home fa-lg p-1'></i>
                                <span class='p-1 text-nowrap'><?php echo get_the_tags();?></span>
                            </div></a>
                            <a href='<?php the_permalink();?>' class='text-dark mx-2 mx-md-0'>
                                <div class='bg-flat-16 p-2 d-flex align-item-center mb-1'> 
                                <i class='fa fa-home fa-lg p-1'></i>
                                <span class='p-1 text-nowrap'> خواندن مقاله<?php the_views();?></span>
                            </div></a>


                        </footer>
                    </section>




<?php

                            }
                        }?>



                    



                </div>
                
                <?php get_sidebar('index');?>
            </div>
        </div>

<?php get_footer()?>




















