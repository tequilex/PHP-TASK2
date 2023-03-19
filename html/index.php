<?php
require '../src/TariffInterface.php';
require '../src/ServiceInerface.php';
require '../src/TariffAbstract.php';
require '../src/TariffBasic.php';
require '../src/ServiceGPS.php';
require '../src/ServiceDriver.php';
require '../src/TariffHour.php';
require '../src/TariffStudent.php';

/** @var TariffInterface $tariff */
// $tariff = new TariffBasic(5, 60);
$tariff = new TariffStudent(5, 60);
// $tariff = new TariffHour(5, 61);
// $tariff->addService(new ServiceGPS(15));
// $tariff->addService(new ServiceDriver(100));
echo $tariff->countPrice();