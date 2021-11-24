<?php 

  // ADD META BOX

function input_job(){
    add_meta_box('tinh-trang-dropdown','Công Việc','tg_input_job',array('peoplesays'));
}
add_action('add_meta_boxes','input_job');

function tg_input_job ( $post ) {
   $inputjob = get_post_meta( $post->ID, '_inputjob', true );
?>    
      <input type="text" id="inputjob" name="input_job"  value="<?php echo esc_attr( $inputjob ); ?>" />
<?php
}

function tg_save($post_id){
  $input_job = sanitize_text_field($_POST['input_job']);
  update_post_meta( $post_id, '_inputjob', $input_job );
}
add_action('save_post','tg_save');

?>