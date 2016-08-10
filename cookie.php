<?php
const cookie_name = 'id';
$json = $_POST['MyData'];
$cookie_value = json_decode($json);
  setcookie(cookie_name, $cookie_value->id, time()+30*24*60*60, "/");
