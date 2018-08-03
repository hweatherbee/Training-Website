<?php
require ('templateTop.php');
?>

<div class="jumbotron text-center">
 <h1>Industrial Control Systems Lectures</h1>
</div>

<div class="container">
  <div class="row">

    
      <?php
	  $path = 'lectures/';
      
      module_col('Kali Overview', '', $path.'Day 1_Lab_And_Kali Overview_Greg Randall.pptx',$path.'Day 1_Lab_And_Kali Overview_Greg Randall.pdf');
	  module_col('Packet Capture', '', $path.'Day1_HandsOn_PacketCapture_And_Inspection_Greg_Randall.pptx',$path.'Day1_HandsOn_PacketCapture_And_Inspection_Greg_Randall.pdf');
      module_col('Recon/Pen Testing',  '', $path.'Day2_Reconnaissance_And_PenTesting_Greg Randall.pptx',$path.'Day2_Reconnaissance_And_PenTesting_Greg Randall.pdf');
      module_col('Firewall Configuration', '', $path.'FirewallConfiguration.pptx',$path.'FirewallConfiguration.pdf');
      module_col('Initial Configuration',  '', $path.'Getting Started.pptx',$path.'Getting Started.pdf');
      module_col('Indicators of Compromise','', $path.'Indicators of Compromise.pptx',$path.'Indicators of Compromise.pdf');
      module_col('PLC CommSetup', '', $path.'PLC Lab_Getting Started _CommSetup.docx',$path.'PLC Lab_Getting Started _CommSetup.pdf');
      module_col('PLC IP Settings', '', $path.'PLC Lab_Getting Started_IP.docx',$path.'PLC Lab_Getting Started_IP.pdf');
	  module_col('PLC Overview', '', $path.'PLC-Notes-Capacity.pptx',$path.'PLC-Notes-Capacity.pdf');
	  module_col('Shodan', '', $path.'Shodan.pptx',$path.'Shodan.pdf');
	  module_col('Vulnerability Analysis', '', $path.'VulnerabilityAnalysis.ppt',$path.'VulnerabilityAnalysis.pdf');
	  
	 /*  module_col('Kali Overview' , '', $path.'Day 1_Lab_And_Kali Overview_Greg Randall.pdf');
      module_col('Packet Capture', '', $path.'Day1_HandsOn_PacketCapture_And_Inspection_Greg_Randall.pdf');
      module_col('Recon/Pen Testing',  '', $path.'Day2_Reconnaissance_And_PenTesting_Greg Randall.pdf');
      module_col('Firewall Configuration', '', $path.'FirewallConfiguration.pdf');
      module_col('Initial Configuration',  '', $path.'Getting Started.pdf');
      module_col('Indicators of Compromise','', $path.'Indicators of Compromise.pdf');
      module_col('PLC CommSetup', '', $path.'PLC Lab_Getting Started _CommSetup.pdf');
      module_col('PLC IP Settings', '', $path.'PLC Lab_Getting Started_IP.pdf');
	  module_col('PLC Overview', '', $path.'PLC-Notes-Capacity.pdf');
	  module_col('Shodan', '', $path.'Shodan.pdf');
	  module_col('Vulnerability Analysis', '', $path.'VulnerabilityAnalysis.pdf'); */
      ?>

  </div>
</div>

</body>
</html>

<?php

  function module_col($mod_title, $mod_discription, $mod_link, $mod_link2) {
    echo '
      <div class="col-md-4">
        <div class="card">
        <h5 class="card-header">'.$mod_title.'</h5>
        <div class="card-body"> 
          <p class="card-text">'.$mod_discription.'</p>
          <a href="'.$mod_link.'" class="btn btn-sm btn-primary"> PowerPoint</a>
		  <a href="'.$mod_link2.'" target="blank" class="btn btn-sm btn-primary">PDF</a>
		  
        </div>
      </div>
    </div>';
  }
?>
