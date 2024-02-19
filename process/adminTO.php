<?php


require_once('../utils/connexion.php');
require_once('../utils/autoload.php');


$newadmin = new AdminManager($bdd);

if (
    isset($_POST['name']) && !empty($_POST['name']) &&
    isset($_POST['link']) && !empty($_POST['link'])
) {

    if (isset($_POST['premium'])) {
        $premium = 1;
    } else {
        $premium = 0;
    }


if ( !$newadmin->doubleOperator($_POST['name'])) {


    $data = [

        'name' => $_POST['name'],
        'link' => $_POST['link'],
        'grade_count' => 0,
        'grade_total' => 0,
        'premium' => $premium

    ];

    var_dump($data);


    $newadmin->insertOperator($data);

}}
