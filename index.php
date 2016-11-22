<?php

require_once('./functions.php');

$lang = $site->getTranslation();

require_once('./partials/header.php');

$site->render();

require_once('./partials/footer.php');
