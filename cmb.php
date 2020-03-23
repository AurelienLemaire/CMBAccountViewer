<?php

include "OperationBancaire.php";
include "ComptesCMBprocess.php";


$processController = new ComptesCMBprocess("comptes", "comptes.csv");
$processController->setDebug(false);


$processController->dropData();
$processController->printReport();
$processController->insertOperationsIntoDb();
$processController->printReport();
$processController->categorizeOperationsIntoDb();
$processController->printReport();

$processController->buildMonthlyReports();
$processController->printReport();



?>
