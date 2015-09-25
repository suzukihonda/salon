<?php

$conn= mysqli_connect('localhost','root','','salon');

$sql = "SELECT * FROM motocykle";

$result=$conn->query($sql);
