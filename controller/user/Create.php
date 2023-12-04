<?php

include  __DIR__ . "../../../../../htdocs/agency/config/DbConnection.php";
include "../../services/user.php";
session_start();
CreateUser($connexion);
