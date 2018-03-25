<?php
$verkauf = Verkauf::findById(1);
var_dump($verkauf->getTreuebonus());