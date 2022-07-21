<?php

session_start(); // Start The Session

unset($_SESSION['customer_id']);

header('Location: index.php'); // Redirect To Login Page

exit();