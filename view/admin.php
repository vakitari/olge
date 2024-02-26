<?php
if ($_SESSION['role'] != 2) {
  header('location:home.php');
}