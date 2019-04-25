<?php

function getBirthdays() 
{
    $db = openDatabaseConnection();
    $sql = "SELECT * FROM birthdays";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
    return $query->fetchAll();
}

function getMonths()
{
    $months = ["januari","februari","maart","april","mei","juni","juli","augustus","september","oktober","november","december"];
    return $months;
}

function getUser($id)
{
    $db = openDatabaseConnection();
    $sql = "SELECT * FROM birthdays WHERE id=$id";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
    return $query->fetch();
}

function deleteRow($id) 
{
    $db = openDatabaseConnection();
    $sql = "DELETE FROM `birthdays` WHERE id=$id";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
}

function createRow() 
{
    $day = $_POST['day'];
    $month = $_POST['month'];
    $name = $_POST['name'];
    $year = $_POST['year'];
    $db = openDatabaseConnection();
    $sql = "INSERT INTO birthdays (day, month, name, year) VALUES ('$day', '$month', '$name', '$year')";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
}

function editRow($id, $day, $month, $name, $year)
{
    $db = openDatabaseConnection();
    $sql = "UPDATE birthdays SET day='$day', month='$month', name='$name', year='$year' WHERE id=$id";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
}