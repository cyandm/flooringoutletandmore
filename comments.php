<?php
comment_form(array(
  'comment_field' => '<div class="form_control">
      <textarea id="comment" name="comment" class="form-control" rows="3" maxlength="65525" placeholder="comment *" required></textarea>
    </div>',
  'fields' => [
    'author' => '<div class="form_control">
        <input id="author" name="author" class="form-control" aria-required="true" placeholder="name *" required />
      </div>',
    'email' => '<div class="form_control">
        <input id="email" name="email" class="form-control" placeholder="email *" required />
    </div>',
    'cookies' => ""
  ],
  'submit_button' => '<input name="%1$s" type="submit" id="%2$s" class="btn_no_icon bg_white" value="Send comment" />',
  'comment_notes_before' => "",
  'comment_notes_after' => "",
  'logged_in_as' => null,
  'title_reply' => "",
  'title_reply_before' => "",
  'title_reply_after' => "",
  'title_reply_to' => "Reply to %s",
  'label_submit' => "Send comment",
  'submit_field' => '<div class="form-submit">%1$s %2$s</div>',
));

if (have_comments()) :
?>
  <div class="comment-list" id="comment-list">
    <?php
    $list = wp_list_comments(
      array(
        'style' => 'div',
        'short_ping' => true,
        'avatar_size' => 0
      )
    );
    ?>
  </div>
<?php
endif;
?>