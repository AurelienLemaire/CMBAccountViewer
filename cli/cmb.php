<?php

include "classes/OperationBancaire.php";
include "classes/ComptesCMBprocess.php";


$processController = new ComptesCMBprocess("data/comptes", "data/comptes.csv");
$processController->setDebug(false);

$processController->createDatabase();
$processController->printReport();

$processController->dropData();
$processController->printReport();
$processController->insertOperationsIntoDb();
$processController->printReport();
$processController->commit();

$processController->categorizeOperationsIntoDb();
$processController->printReport();

$processController->buildMonthlyReports();
$processController->printReport();



?>
