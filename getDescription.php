<?php
require './config.php';
$selected_manhwa = $_GET['id'];
echo mysqli_fetch_array(mysqli_query($conn, "SELECT m.description as descr FROM manhwa as m WHERE Manhwa_Num='$selected_manhwa'"))['descr']; 
echo '@'; echo mysqli_fetch_array(mysqli_query($conn, "SELECT m.Other_Names as descr FROM manhwa as m WHERE Manhwa_Num='$selected_manhwa'"))['descr'];
echo '@';echo mysqli_fetch_array(mysqli_query($conn, "SELECT m.Author as descr FROM manhwa as m WHERE Manhwa_Num='$selected_manhwa'"))['descr'];
echo '@';echo mysqli_fetch_array(mysqli_query($conn, "SELECT m.Painter as descr FROM manhwa as m WHERE Manhwa_Num='$selected_manhwa'"))['descr'];
echo '@';echo mysqli_fetch_array(mysqli_query($conn, "SELECT m.Evaluation as descr FROM manhwa as m WHERE Manhwa_Num='$selected_manhwa'"))['descr'];
