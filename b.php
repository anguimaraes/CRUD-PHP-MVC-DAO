<?php

$id = $_GET['id'];

$_SESSION['id'] = $id;

header("location: /mvc-dao-final/App/pessoa/delete");