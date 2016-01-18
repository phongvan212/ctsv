<?php
/*
 Template Name: Q&A
 */
?>
<?php get_header(); ?>
<div class="container">
 
        <section id="main-content" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                            <?php if(function_exists('bcn_display'))
                            {
                                bcn_display();
                            }?>
                </div>
                <header class="entry-header">
                      <h2 class="entry-title">
                       Hỏi đáp <small>Giải đáp thắc mắc</small>
                      </h2>
                      <hr/>
                      <blockquote>
                            <h3>Lưu ý khi đặt câu hỏi:</h3>
                            <ul>
                                <li>Dùng tiếng Việt có dấu.</li>
                                <li>Điền đầy đủ thông tin: Họ tên, Email, Nội dung.</li>
                                <li>Nội dung phù hợp thuần phong mỹ tục.</li>
                                <li>Những câu hỏi vi phạm quy định trên sẽ bị xóa.</li>
                            </ul>
                        </blockquote>
                    <h2 class="entry-title">
                       Đặt câu hỏi
                      </h2>
                    <hr/>
                    <?php 
                        $comment_args = array('title_reply'=>'',
                            'label_submit'  => 'Gửi đi',
                            'class_submit'  => 'btn btn-primary',
                            'comment_notes_after' => '',
                            'comment_notes_before' =>'',
                            'fields' => apply_filters( 'comment_form_default_fields', array(
                                  'author'=>'<div class="form-group"><label for="author">Họ và tên</label><input id="author" name="author" type="text" required="required" placeholder="Nhập họ và tên"></div>',
                                  'email'=>'<div class="form-group"><label for="email">Email</label><input id="email" name="email" type="email" required="required" placeholder="Địa chỉ email"></div>',
                                  )),
                            'comment_field'=>'<div class="form-group"><label for="comment">Nội dung</label><textarea id="comment" name="comment" rows="10"  required="required" placeholder="Nhập nội dung câu hỏi tại đây."></textarea></div>',

                        );
                    ?>
                    <?php comment_form($comment_args);?>
                    <h2>Câu hỏi gần đây</h2><hr/>
                      <div class="commentlist">
                          <?php
                          $postid = get_the_ID();
                          $args = array(
                            'post_id' => $postid, // use post_id, not post_ID
                            'status'=>'approve',
                            'parent'=>0
                          );
                          $comments = get_comments($args);
                          echo("<div class='comments-area'>");
                          echo("<ol class='commentlist clearfix'>");
                          foreach($comments as $comment) {
                            echo ("<li id='li-comment-".$comment->comment_ID."'>");
                            echo("<article id='".$comment->comment_ID."' class='comment'>");
                                echo get_avatar($comment->comment_author_email,60);
                                echo("<div class='comment-des'>");
                                  echo("<div class='comment-by'>");
                                      echo("<p class='author'><strong>".$comment->comment_author."</strong></p>");
                                      echo("<p class='date'><time datetime='".$comment->comment_date_gmt."'>".$comment->comment_date."</time></p>");
                                  echo("</div>");
                                  echo("<section class='comment-content comment'>");
                                    echo("<p class='cmt-content'>".$comment->comment_content."</p>");
                                  echo("</section>");
                                echo("</div>");
                            echo("</article>");
                             $args_anw = array(
                                'post_id' => $postid, // use post_id, not post_ID
                                'status'=>'approve',
                                'number'=>1,
                                'parent'=>$comment->comment_ID
                              );
                              $anws = get_comments($args_anw); 
                              if(!is_null($anws)&!is_null($anws[0]->comment_content))
                              {
                                echo("<ol class='children'>");
                                  echo ("<li id='li-comment-".$anws[0]->comment_ID."' class='byuser'>");
                                  echo("<article id='".$anws[0]->comment_ID."' class='comment'>");
                                      echo get_avatar($anws[0]->comment_author_email,60);
                                      echo("<div class='comment-des'>");
                                        echo("<div class='comment-by'>");
                                            echo("<p class='author'><span class='administrator'>Quản trị viên: </span><strong class='admin-name'>".$anws[0]->comment_author."</strong></p>");
                                            echo("<p class='date'><time datetime='".$anws[0]->comment_date_gmt."'>".$anws[0]->comment_date."</time></p>");
                                        echo("</div>");
                                        echo("<section class='comment-content comment'>");
                                          echo("<p class='cmt-content'>".$anws[0]->comment_content."</p>");
                                        echo("</section>");
                                      echo("</div>");
                                  echo("</article>");
                                echo("</ol>");
                              }   
                            echo("</li>");
                          }
                          echo("</ol>");
                          echo("</div>");
                          ?>
                      </div>
                </header>
        </section>
        <section id="sidebar" class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
 			<?php get_sidebar(); ?>
        </section>
 
</div>
<?php get_footer(); ?>