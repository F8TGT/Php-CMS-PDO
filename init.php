<?php

// START SESSION
session_start();

// INCLUDE THE MAIN CONFIGURATION FILE
require_once "config/config.php";

// LOAD DATABASE
require_once "classes/database.php";

// INCLUDE HELPER FUNCTIONS
require_once "helpers.php";

// DEFINE GLOBAL CONSTANTS
const APP_NAME = "CMS PDO System";
