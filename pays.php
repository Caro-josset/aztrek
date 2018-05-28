<?php

require_once 'library/functions.php';
require_once 'model/database.php';

getHeader("Pays");

$list_destinations = getAllDestinations();
?>



<?php getFooter();  