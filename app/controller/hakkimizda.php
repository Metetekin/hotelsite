<?php

$teamList = $conn->prepare("SELECT * FROM team ");
$teamList->execute(array());
$teamList = $teamList->fetchAll(PDO::FETCH_ASSOC);

$commentList = $conn->prepare("SELECT * FROM comments ");
$commentList->execute(array());
$commentList = $commentList->fetchAll(PDO::FETCH_ASSOC);

$referenceList = $conn->prepare("SELECT * FROM reference ");
$referenceList->execute(array());
$referenceList = $referenceList->fetchAll(PDO::FETCH_ASSOC);


$faqList = $conn->prepare("SELECT * FROM faqs ");
$faqList->execute(array());
$faqList = $faqList->fetchAll(PDO::FETCH_ASSOC);

$fileList = $conn->prepare("SELECT * FROM files WHERE file_type=:type");
$fileList->execute(array("type"=>2));
$fileList = $fileList->fetchAll(PDO::FETCH_ASSOC);
