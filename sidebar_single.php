<aside class='  col-11 col-md-3 p-0 mx-auto  mr-md-3 mt-3'>
                    <section class='border-bottom border-dark'> 
                        <header class='p-2 bg-flat-1 text-light text-right'>
                            <h3>مطالب پیشنهادی</h3>
                        </header>

<?php
        $tag=wp_get_post_tags($post->ID);
        if($tag){
            $tag_id=array();
            foreach($tag as $in_tag){
                $tag_id[]=$in_tag->term_id;
            }
            $arg=array(
                'tag__in'=>$tag_id,
                'post__not_in'=>array($post->ID)
            );
            $temp_qu=new wp_query($arg);
            if($temp_qu->have_posts()){
                while($temp_qu->have_posts()){
                    $temp_qu->the_post();?> 
                        <div class='bg-light p-3 pr-5 text-dark text-right'>
                            <div class='py-2'><a href='<?php the_permalink();?>' class='text-dark'><?php the_title();?></a></div>
                        </div>
                    </section>
                  <section class='border-bottom border-dark'> 
                        <header class='p-2 bg-flat-1 text-light text-right'>
                            <h3>مطالب پیشنهادی</h3>
                        </header>
                        <div class='bg-light p-3 pr-5 text-dark text-right'>
                            <div class='text-left direc-ltr'>
                             این یک تست است   

</div>

                        </div>
                    </section>
 
                </aside>
<?php
                }
            }
        
            } 
         
        
    ?>

