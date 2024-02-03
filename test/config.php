<?php
$sql = "CREATE TABLE users(\n"

. "    Id int PRIMARY KEY AUTO_INCREMENT,\n"

. "    Username varchar(200),\n"

. "    Email varchar(200),\n"

. "    Age int,\n"

. "    Password varchar(200)\n"

. ");";
?>