<?php

function get_bundle_name() 
{
  $content  = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/dist/bundles/assets.json');

  $bundle = json_decode($content, true);

  return $bundle['app'];
}
