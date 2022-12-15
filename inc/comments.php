<?php 

function halim_comments_field($field){
 $comment =  $field['comment'];
 $author =  $field['author'];
 $email =  $field['email'];
 $url =  $field['url'];
 $cookies =  $field['cookies'];
 
 unset($field['comment']);
 unset($field['author']);
 unset($field['email']);
 unset($field['url']);
 unset($field['cookies']);
 
 $field['author'] = $author;
 $field['email'] = $email;
 $field['url'] = $url;
 $field['comment'] = $comment;
 $field['cookies'] = $cookies;
 
 return $field;
}
add_filter('comment_form_fields','halim_comments_field');