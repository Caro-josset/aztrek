<?php

require_once 'library/functions.php';
require_once 'model/database.php';

getHeader("Destinations");

$list_destinations = getAllDestinations();
?>



<?php getFooter();  