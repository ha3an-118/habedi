<?php
if ( post_password_required() ) {
	return;
}
?>
<section class='container-fluid mx-auto text-right'>
    <header class='bg-flat-2 text-flat-7 p-4'>
        <h4>دیدگاه ها</h4>
    </header>
    <div id='fixForm'>
        
     <input id='comment_post_ID' value="<?php echo get_the_ID();?>"  type="hidden">
    </div>
    <?php
        $args = array(
            'post__in'=>get_the_ID(),
            'parent'=>'0');
        $comments_query = new WP_Comment_Query;
        $comments = $comments_query->query( $args );
    ?>
    <div class='bg-flat-7 text-flat-2 '>
        <ol>
            <?php
                if ( $comments ) {
	                foreach ( $comments as $comment ) {?>
                        <li class='comment mt-5 '>  
                             <ol>
                                <?php hafs_insert_comment($comment);?>
                                <?php
                                    $childArg=array(
                                        'post__in'=>get_the_ID(),
                                        'parent'=>$comment->comment_ID
                                    );
                                    $comment_child_query=new WP_Comment_Query;
                                    $comments_child=$comment_child_query->query($childArg);
                                    if($comments_child){
                                        foreach($comments_child as $commnet_child){
                                                    hafs_insert_comment($comment_child);
                                        }
                                    }?> 
                            </ol>
                        </li>
                    <?php }?>
        </ol>
                <?php
                } else {
	                echo 'No comments found.';
                }?>
                </div>
            </section>


