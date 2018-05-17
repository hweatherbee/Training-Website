<?php

define("SITES_ROOT", "sites/");
define("RESOURCES_ROOT", "resources/");

/*
  Read data from XML file and programatically create new listing
  for each project.
*/
function init_projects($xml) {
  foreach ($xml->children() as $p) {
    new_project_col($p->name, $p->directory, $p->logo);
  }
}

/*
  Create a new project listing given the project name, site directory,
  and logo.
*/
function new_project_col($site_name, $site_dir, $site_logo) {
  echo '<div class="col">
     <div class="project">
       <a href="' . SITES_ROOT . $site_dir . '">
         <img src="' . RESOURCES_ROOT . $site_logo . '">
         </a>
         <h2>' . $site_name . '</h2>
       </div>
     </div>';
}

?>
