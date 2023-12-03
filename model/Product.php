<?php



function CreateProduct(){
    return "INSERT INTO `product`(`nom`, `Description`, `id_category`, `status`, `id_team`, `Price`) VALUES (?, ?, ?, ?, ?, ?)";
}

function CreateCategory(){
    return "INSERT INTO `category` (`nom`) VALUES (?)";
}

function CreateTeam(){
    return "INSERT INTO `team` (`nom`) VALUES (?)";
}

function DeleteProduct(){
    return "DELETE FROM `product` WHERE id = ?";
}

function GetAllProducts(){
    return "SELECT * FROM `product`";
}

function UpdateProduct(){
    return "UPDATE `product` SET `nom`=?, `Description`=?, `id_category`=?, `status`=?, `id_team`=?, `Price`=? WHERE id = ?";
}





?>