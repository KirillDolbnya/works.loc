<?php
session_start();

include_once ('session.php');
echo Session::flash('success');