<?php if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );

}
else{
    echo 'the function dose not exist';

}
    if(!function_exists('post_view_count')){
        function  post_view_count($post_id){
            $meta_key='post_view_count';
            $counter=get_post_meta($post_id,$meta_key,true);
            if($counter==''){
                add_post_meta($post_id,$meta_key,'1',true);
            }
            else{
               $counter++;
               update_post_meta($post_id,$meta_key,$counter);
 
                add_post_meta($post_id,$meta_key,'3',true);
            }
            
        }
    }
    if(!function_exists('get_post_view')){
        function get_post_view($post_id){
            $meta_key='post_view_count';
            $counter=get_post_meta($post_id,$meta_key,true);
            if($counter==''){
                return 'بازدید:0';}
            else{
                return $counter."بازدید";
            }
        }}
?>
<?php
if(!function_exists('hafs_insert_comment')){
    function hafs_insert_comment($comment){?>
        <li>
                                    <div class='mx-auto bg-flat-4  d-block d-md-flex flex-row'>
                                        <div class=' col-2 bg-flat-3 px-2  d-flex  flex-row flex-md-column'>
                                            <figure class='bg-flat-2 up ' style='width:50px;height:50px'>
                                                <img src='<?php echo get_avatar_url($comment)?>' class='img-fluid'>
                                            </figure>
                                            <h6  class='p-2'><?php echo $comment->comment_author?></h6>
                                        </div>
                                        <div class='col-9 mt-1 p-2'>
                                            <p class='bg-flat-7 pr-4 p-2 mr-3 mx-md-4 rounded w-100'>
                                                    <?php echo $comment->comment_content?>
                                                    <br>
                                                    <i class='d-block text-left text-info'> <small><?php echo $comment->comment_date?></small></i>
                                                    <br>
                                                    <i class='d-block text-left text-info'> <small>this is coment post id<?php echo $comment->comment_post_ID?></small></i>
                                                    <br>
                                                    <i class='d-block text-left text-info'> <small>this is comment parent<?php echo $comment->comment_parent?></small></i>
                                                    <br>
                                                    <i class='d-block text-left text-info'> <small>this is comment id<?php echo $comment->comment_ID?></small></i>

                                                    
                                             </p>
                                            <div class='p-2 pr-4 mr-3 mx-md-4 text-left'>
                                                <button class='btn btn-success answer'> <i class='fa fa-reply '></i>    پاسخ</button>
                                                
                                                <input class='comment_post_ID' value="<?php echo $comment->comment_post_ID;?>"  type="hidden">
                                                <input class="comment_parent" value="<?php echo $comment->comment_ID;?>" type="hidden">

                                            </div> 
                                               
                                        </div>                                 
                                    </div>
                                </li>


<?php


    }
}





?>










