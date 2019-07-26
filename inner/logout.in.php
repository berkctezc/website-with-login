<?php 
session_start();
session_unset(); session_destroy(); #atanan degerleri boşa çıkardık ve yok ettik
header("Location: ../index.php"); #ana sayfaya yönlendirdik