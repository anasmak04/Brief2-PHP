<?php

function blogCreate(){
    return "INSERT INTO `blog`(`nom`, `status`, `description`, `id_user`, `Price`) VALUES (?, ?, ?, ?, ?)"; 
}



function blogDelete(){
    return "DELETE FROM `blog` WHERE id = ?";
}


function blogUpdate(){
    return "UPDATE `blog` SET `nom`=?, `status`=?, `description`=?, `id_user`=?, `Price`=? WHERE id = ?";
}


function blogGetAll(){
    return "SELECT * FROM `blog`";
}
?>