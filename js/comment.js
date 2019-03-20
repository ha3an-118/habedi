var formFlag=true;
var tempSend;//it's for comment for that for another comment'
//this is default value of form when the comment for page not for another comment
var formTempDef;
var sec1=" <form class='mt-2 mr-3 mx-md-4' id='commentform' action='http://localhost/web/wordpress/wp-comments-post.php' method='post'><textarea id='comment' name='comment' class='form-control' row='4' placeholder='پیامتون' required></textarea><div class='row my-2'><div class='col'><input id='author' name='author' type='text'class='form-control'placeholder='نام ' required></div><div class='col'><input id='email' name='email' type='email' class='form-control' placeholder='email' required></div></div><div class='row'><div class='col'><input type='tel' placeholder='شماره تلفن' class='form-control'><input id='url' name='url' value='' size='30' maxlength='200' type='url'></div><div class='col'><div class='row px-3 justify-content-between'><button type='submit' class='form-control col-5 btn btn-success '>ارسال پاسخ</button><button type='button' class='form-control col-5 btn btn-danger' onclick='rmcom()' formnovalidate>لغو پاسخ</button><input name='comment_post_ID' value='";
var sec2="' id='comment_post_ID' type='hidden'><input name='comment_parent' id='comment_parent' value='";
var sec3="' type='hidden'></div></div></div></form>";




$(document).ready(function(){
    $("button.answer").click(function(){
        if(formFlag){
           $("#commentform").remove();
           formFlag=false; 
        }
        if(!formFlag){
            var comPostId= $(this).siblings("input.comment_post_ID").attr("value");
            var comParent=$(this).siblings("input.comment_parent").attr("value");
                         tempSend=sec1+comPostId+sec2+comParent+sec3;
            $(this).parent().after(tempSend);  
          formFlag=true;
        }
    });
});

function rmcom(){
    if(formFlag){
        $("#commentform").remove();
        $("#fixForm").append(formTempDef);
    }
}
$(document).ready(function(){
   var comPostId=$("#comment_post_ID").attr("value");
    formTempDef=sec1+comPostId+sec2+sec3;
    rmcom();

});
