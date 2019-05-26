<?php

function is_logged_in() {

  $security101 = get_instance();
  if (!$security101->session->userdata('email')) {
    // code...
    redirect('auth/login');
  } else {
      $role_id = $security101->session->userdata('role_id');

      if ($role_id != 1) {
          redirect('auth/blocked');
      }

  }
}


function is_logged_user() {

  $security101 = get_instance();
  if (!$security101->session->userdata('email')) {
    // code...
    redirect('auth/login');
  } else {
      $role_id = $security101->session->userdata('role_id');

      if ($role_id != 2) {
          redirect('auth/blocked');
      }

  }
}


?>
