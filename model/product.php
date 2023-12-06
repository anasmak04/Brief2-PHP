<?php


function productDelete()
{
    return "DELETE FROM `product` WHERE id='?' ";
}


function productCreate()
{
    return "INSERT INTO `product`(`nom`, `Description`, `id_category`, `status`, `id_team`, `Price`) VALUES (?, ?, ?, ?, ?, ?)";
}


function productUpdate()
{
    return "UPDATE `product` SET `nom`=?, `Description`=?, `id_category`=?, `status`=?, `id_team`=?, `price`=? WHERE id = ?";
}


function ProductTeamCategory()
{
    return "SELECT product.* , team.nom AS teamNom, category.nom AS categoryNom, product.price
    FROM ((`product`
    INNER JOIN team ON product.id_team = team.id)
    INNER JOIN category ON product.id_category = category.id)
    ";
}
