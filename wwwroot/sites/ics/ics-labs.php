<?php
require ('templateTop.php');
?>

<div class="jumbotron text-center">
 <h1>Industrial Control Systems Labs</h1>
</div>

<div class="container">
  <div class="row">

    
      <?php
	  $path = 'labs/';
      module_col('ICS 001', 'Seal in Circuit', $path.'ICS_001_Ex1_PLC Lab_Getting Started-&-Seal in Circuit.pdf');
      module_col('ICS 002', 'Timers & Counters', $path.'ICS_002_Ex2_PLC Lab_Timers-Counters.pdf');
      module_col('ICS 003', 'Traffic Light', $path.'ICS_003_Ex3_PLC Lab_Traffic Light.pdf');
      module_col('ICS 004', 'Simulator', $path.'ICS_004_Ex4_PLC Lab_Simulator.pdf');
      module_col('ICS 005', 'HMI', $path.'ICS_005_HMI_lab.pdf');
      module_col('ICS 006', 'Firewall Configuration', $path.'ICS_006_FirewallConfiguration_lab.pdf');
      module_col('ICS 007', 'Snort', $path.'ICS_007_SnortHandsOnProject.pdf');
      module_col('ICS 009', 'Hacking a Wireless Network', $path.'ICS_009_ICS Lab 1 Hacking a Wireless NetworkFINAL.docx.pdf');
	  module_col('ICS 010', 'Scanning & Enumeration', $path.'ICS_010_ICS Lab 2 Scanning and EnumeratingFINAL.docx.pdf');
	  module_col('ICS 011', 'Packet Capture/Analysis with Wireshark', $path.'ICS_011_ICS Lab 3 Packet Capture and Analysis with WiresharkFINAL.docx.pdf');
	  module_col('ICS 012', 'Deep Packet Ananlysis with Wireshark', $path.'ICS_012_ICS Lab 4 Deep Packet Analysis with WiresharkFINAL.docx.pdf');
	  module_col('ICS 013', 'Installing and Using Veil Evasion', $path.'ICS_013_ICS Lab 5 Installing and Using Veil_Evasion.docx.pdf');
	  module_col('ICS 014', 'Using SimpleHTTPServer', $path.'ICS_014_ICS Lab 6 Using SimpleHTTPServer.docx.pdf');
	  module_col('ICS 015', 'Exploiting a PLC Using Metasploit', $path.'ICS_015_ICS Lab 7 Exploiting A PLC Using MetasploitFINAL.docx.pdf');
	  module_col('ICS 016', 'Exploiting an HMI Device Using Armitage ', $path.'ICS_016_ICS Lab 8 Exploiting an HMI Device Using ArmitageFINAL.pdf');
	  module_col('ICS 017', 'OpenVAS', $path.'ICS_017_OpenVAS_Lab.pdf');

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
          <a href="'.$mod_link.'" target="blank" class="btn btn-sm btn-primary">View Lab</a>
		  
        </div>
      </div>
    </div>';
  }
?>
