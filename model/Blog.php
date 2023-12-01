<?php


function CreateBlog(){
    return "INSERT INTO `blog`(`nom`, `status`, `description`, `id_user`, `Price`) VALUES (?, ?, ?, ?, ?)";
}

function DeleteBlog(){
    return "DELETE FROM `blog` WHERE id = ?";
}

function GetAllBlogs(){
    return "SELECT * FROM `blog`";
}

function UpdateBlog(){
    return "UPDATE `blog` SET `nom`=?, `status`=?, `description`=?, `id_user`=?, `Price`=? WHERE id = ?";
}



?>