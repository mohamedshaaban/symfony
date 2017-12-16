<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('oc', array (
  'pagerfanta' => 
  array (
    'previous' => 'Precedent',
    'next' => 'Seguent',
  ),
));

$catalogueEn_US = new MessageCatalogue('en_US', array (
));
$catalogue->addFallbackCatalogue($catalogueEn_US);

return $catalogue;
