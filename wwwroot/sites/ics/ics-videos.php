<?php
require ('templateTop.php');
?>

<div class="jumbotron text-center">
 <h1>Industrial Control Systems Videos</h1>
</div>

<div class="container">
  <div class="row">

    
      <?php
	  $path = 'videos/';
      
	  module_col('Introduction to PLCs', 'Dr. Noureddine Bekhouche', $path.'Introduction-to-PLCs.mp4');
      module_col('PLC Programming', 'Dr. Noureddine Bekhouche', $path.'PLC-Programming.mp4');
	  module_col('Ladder Logic', 'Jay Snellen', $path.'Ladder-Logic.mp4');
	  module_col('HMI Development', 'Jay Snellen', $path.'HMI-Development.mp4');
	  module_col('ICS Networks and Protocols',  'Greg Randall', $path.'ICS-Networks-and-Protocols.mp4');
      module_col('Intrusion Detection Systems', 'Dr. Guillermo Francia', $path.'Intrusion-Detection-Systems.mp4');
	  module_col('Indicators of Compromise','Dr. Guillermo Francia', $path.'Indicators-of-Compromise.mp4');
	  module_col('Firewall Configuration', 'Jay Snellen', $path.'Firewall-Configuration.mp4');
	  module_col('ICS Traffic Generation', 'Dr. Guillermo Francia', $path.'ICS-Traffic-Generation.mp4');
	  module_col('Kali Overview', 'Greg Randall', $path.'Kali-Overview.mp4');
	  module_col('Wireless Attacks', 'Greg Randall', $path.'Wireless Attacks.mp4');
	  module_col('Scanning and Enumerating Using Nmap', 'Greg Randall', $path.'Scanning-and-Enumerating-Using-Nmap.mp4');
      module_col('Packet Capture and Analysis with WireShark', 'Greg Randall', $path.'Packet-Capture-and-Analysis-with-WireShark.mp4');
	  module_col('Veil Evasion', 'Greg Randall', $path.'Veil-Evasion.mp4');
	  
	  
      ?>

  </div>
</div>

</body>
</html>

<?php

  function module_col($mod_title, $mod_discription, $mod_link) {
    echo '
      <div class="col-md-4">
        <div class="card">
        <h5 class="card-header">'.$mod_title.'</h5>
        <div class="card-body"> 
          <p class="card-text">'.$mod_discription.'</p>
          <a href="'.$mod_link.'" download class="btn btn-sm btn-primary"> Video</a>
	
        </div>
      </div>
    </div>';
  }
?>
