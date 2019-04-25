<?php

require(ROOT . "model/Model.php");

function index()
{
	render("home/index", array(
		'Events' => getEvents(),
		'months' => getMonths()
	));
}

function delete($id)
{
	render("home/delete", array(
		'id' => $id,
		'current' => getUser($id)
	));
}

function create()
{
    render("home/create", array(
        'day' => $_POST['day'],
        'month' => $_POST['month'],
        'name' => $_POST['name'],
        'time' => $_POST['time']
    ));
}

function edit($id)
{
    render("home/edit", array(
        'id' => $id,
        'user' => getUser($id)
    ));
}

function editConfirm($id)
{
    $day = $_POST['day'];
    $month = $_POST['month'];
    $name = $_POST['name'];

    editRow($id, $day, $month, $name);
}