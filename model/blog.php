<?php


function blogCreateQuery(){
    return "INSERT INTO `blog`(`nom`, `status`, `description`, `id_user`, `Price`) VALUES (?, ?, ?, ?, ?)"; 
}



function blogDeleteQuery(){
    return "DELETE FROM `blog` WHERE id = ?";
}


function blogUpdateQuery(){
    return "UPDATE `blog` SET `nom`=?, `status`=?, `description`=?, `id_user`=?, `Price`=? WHERE id = ?";
}


function blogGetAllQuery(){
    return "SELECT * FROM `blog`";
}


?>