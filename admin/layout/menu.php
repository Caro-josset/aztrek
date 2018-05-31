<?php
require_once __DIR__ . "/../../library/functions.php";

$menus = [
    [
        "label" => "Dashboard",
        "url" => ADMIN_URL,
        "icon" => "home"
    ],
    [
        "label" => "Destinations",
        "url" => ADMIN_URL . "crud/destinations/",
        "icon" => "globe"
    ],
    [
        "label" => "Treks",
        "url" => ADMIN_URL . "crud/treks/",
        "icon" => "map"
    ],
    [
        "label" => "Devis",
        "url" => ADMIN_URL . "crud/devis/",
        "icon" => "map"
    ]
];
?>
 <ul class="nav flex-column">

    <?php foreach ($menus as $menu) : ?>
        <li class="nav-item">
            <a class="nav-link <?php echo (currentPath() == $menu["url"]) ? "active" : ""; ?>" href="<?php echo $menu["url"]; ?>">
                <i class="fa fa-<?php echo  $menu["icon"]; ?>"></i>
                <?php echo $menu["label"]; ?>
            </a>
        </li>
   <?php endforeach; ?>
 </ul> 