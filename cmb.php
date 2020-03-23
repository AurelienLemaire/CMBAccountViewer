<?php

include "classes/OperationBancaire.php";
include "classes/ComptesCMBprocess.php";


$processController = new ComptesCMBprocess("comptes", "comptes.csv");
$processController->setDebug(false);


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
