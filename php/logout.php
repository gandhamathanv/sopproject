<?
echo "logout";
session_abort();
header("Location : ../index.html");