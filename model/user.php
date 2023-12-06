<?php

function userCreate(){
return "INSERT INTO `user` (`firstName`, `lastName`, `email`, `id_role`, `password`) VALUES (?, ?, ?, ?, ?)";
}


function userGetAll(){
    return "SELECT * FROM `user` ";
}


function userUpdate(){
    return "UPDATE `user` SET `firstName`=?, `lastName`=?, `email`=?, `id_role`=? WHERE id = ?";
}


function userDelete(){
    return "DELETE FROM `user` WHERE id = ?";
}

?>