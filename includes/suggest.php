<?php
// form CSS classes
$form_css_class = '';
$confirmation_css_class = 'hidden';

// feedback CSS classes
$title_feedback_class = 'hidden';
$email_feedback_class = 'hidden';
$link_feedback_class = 'hidden';

// values
$email = '';
$title = '';
$link = '';
$info = '';

// sticky values
$sticky_email = '';
$sticky_title = '';
$sticky_link = '';
$sticky_info = '';

// Did the user submit the form?
if (isset($_POST["submit"])) {

  // Get HTTP request user data
  $email = $_POST["email"]; // untrusted
  $title = $_POST["title"]; // untrusted
  $link = $_POST["link"]; // untrusted
  $info = $_POST["info"]; // untrusted

  $form_valid = TRUE;

  if (empty($email)) {
    $form_valid = FALSE;
    $email_feedback_class = '';
  }

  if (empty($title)) {
    $form_valid = FALSE;
    $title_feedback_class = '';
  }

  if (empty($link)) {
    $form_valid = FALSE;
    $link_feedback_class = '';
  }

  if (empty($info)) {
    $info_conf_class = 'hidden';
  }

  if ($form_valid) { // form valid, show conf
    $form_css_class = 'hidden';
    $confirmation_css_class = '';
  } else { // form invalid, show feedback
    $sticky_email = $email; // tainted
    $sticky_title = $title; // tainted
    $sticky_link = $link; // tainted
    $sticky_info = $info; // tainted
  }
}
