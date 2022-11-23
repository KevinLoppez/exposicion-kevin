<?php
 require_once __DIR__ . '/../vendor/autoload.php';

 $date ='12/05/2021 3:30PM';

 $dateTime = DateTime::createFromFormat('d/m/Y', $date)->setTime(0, 0);

 //day/month/year - europe
 //month/day/year - U.S.

/*echo $dateTime->getTimezone()->getName() . ' - ' . $dateTime->format('m/d/Y g:i A') . PHP_EOL;

$dateTime->setDate(2021, 4, 21)->setTime(2,15);
$dateTime->setTimezone(new DateTimeZone('Europe/Amsterdam'));

echo $dateTime->getTimezone()->getName() . ' - ' . $dateTime->format('m/d/Y g:i A') . PHP_EOL;
*/
 var_dump($dateTime, new DateTime('15-05-2021'));

 date_timezone_set()