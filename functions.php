<?php

function register_project_posttypes(){
  $postType = array(
    'label' => "Projects",
    'public' => true,
    'supports' => array(
      'excerpt',
      'title'
    )
  );
  register_post_type("projects", $postType);
}

add_action('init', 'register_project_posttypes');
