<?php

function userCreateQuery(){
return "INSERT INTO `user` (`firstName`, `lastName`, `email`, `id_role`, `password`) VALUES (?, ?, ?, ?, ?)";
}


function userGetAllQuery(){
    return "SELECT * FROM `user` ";
}


function userUpdateQuery(){
    return "UPDATE `user` SET `firstName`=?, `lastName`=?, `email`=?, `id_role`=? WHERE id = ?";
}


function userDeleteQuery(){
    return "DELETE FROM `user` WHERE id = ?";
}


function UserRoleQuery(){
    return "SELECT user.id AS id, user.firstName AS name, user.lastName AS nme, user.email AS email, role.nom AS roleName 
    FROM `user` 
    INNER JOIN role ON user.id_role = role.id";
}

?>