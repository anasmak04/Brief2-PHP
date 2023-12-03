<?php



    function UpdateBlog(){
        return "UPDATE `user` SET `firstName`=?, `lastName`=?, `email`=?, `id_role`=? WHERE id = ?";;
    }

    function GetUsers(){
        return "SELECT * FROM `user` ";
    }


    function DeleteUser(){
        return "DELETE FROM `user` WHERE id = ?";
    }


    function CreateUser(){
        return "INSERT INTO `user` (`firstName`, `lastName`, `email`, `id_role`, `password`)
        VALUES (?, ?, ?, ?, ?)";
    }


?>