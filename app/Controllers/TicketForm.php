<?php

$id = new FormField('id', [$ticketExistsValidation], true);
$personId = new FormField('personId', [$personExistsValidation], true);
$konzertId = new FormField('konzertId', [$konzertExistsValidation], true);
$treuebonusId = new FormField('treuebonusId', [$treuebonusExistsValidation], true);
$zahlungsstatus = new FormField('zahlungsstatus', [$isBoolValidation], true);