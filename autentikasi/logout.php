<?php
require_once "config.php";
//hapus sesi
session_destroy();
//kembali ke halaman login
header("Location: login.php");