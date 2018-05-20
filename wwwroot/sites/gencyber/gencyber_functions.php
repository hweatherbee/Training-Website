<?php

function init_modules($xml) {
  foreach ($xml->children() as $m) {
    new_module($m->name, $m->title);
  }
}

function new_module($mod_title, $mod_discription) {
  # TODO
}

?>
