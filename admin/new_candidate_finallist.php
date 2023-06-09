<?php include ('head.php');?>
<body >

    <div id="wrapper">
        <!-- Navigation -->
        <?php include ('side_bar.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
            	<br>
					<div class="grandMothers">
						<div class="final-mother">
							<div class="final-logo">
								<img src="logo/scclogo.png" alt="left logo">
							</div>
							<div class="center-header">
								<h4 style="font-weight:bold;font-size: 15px;">St. Cecilia's College-Cebu, Inc. <br>
								A La Salle Supervised School <br> Ward II, Poblacion, Minglanilla, Cebu</h4> 
							</div>
							<div class="final-logo1">
							<!-- 	<img src="logo/scclogo.png" alt="Right logo"> -->
								
							</div>

						</div>
						<div class="content-header">
							<?php
			            		require '../dbconnector/dbcon.php';
			            		$years = $conn->query("SELECT year FROM `tbl_partylist`")->fetch_array();
			            	?>
							<h4 style="font-weight:bold;font-size: 14px;">THE NEWLY ELECTED STUDENT COUNCIL OFFICER (SCO)<br> COLLEGE DEPARTMENT <br>
								A.Y. <?php echo $years['year']; ?>
							</h4>
						</div>
					

					<div class="content-body">
						 <?php
                     require '../dbconnector/dbcon.php';
                         
                     $C1 = $conn->query("SELECT *, (SELECT COUNT(*) FROM votes v WHERE v.candidate_id = c.candidate_id) as total FROM tbl_candidate c WHERE position = 'President' and status = 'approved' ORDER BY total DESC")->fetch_array(); 

                     $C2 = $conn->query("SELECT *, (SELECT COUNT(*) FROM votes v WHERE v.candidate_id = c.candidate_id) as total FROM tbl_candidate c WHERE position = 'Vice President' and status = 'approved' ORDER BY total DESC")->fetch_array();        

                     $C3 = $conn->query("SELECT *, (SELECT COUNT(*) FROM votes v WHERE v.candidate_id = c.candidate_id) as total FROM tbl_candidate c WHERE position = 'Secretary' and status = 'approved' ORDER BY total DESC")->fetch_array();

                     $C4 = $conn->query("SELECT *, (SELECT COUNT(*) FROM votes v WHERE v.candidate_id = c.candidate_id) as total FROM tbl_candidate c WHERE position = 'Treasurer' and status = 'approved' ORDER BY total DESC")->fetch_array(); 

                     $C5 = $conn->query("SELECT *, (SELECT COUNT(*) FROM votes v WHERE v.candidate_id = c.candidate_id) as total FROM tbl_candidate c WHERE position = 'Auditor' and status = 'approved' ORDER BY total DESC")->fetch_array(); 
                                           
                     $C6 = $conn->query("SELECT *, (SELECT COUNT(*) FROM votes v WHERE v.candidate_id = c.candidate_id) as total FROM tbl_candidate c WHERE position = 'Mass Media Officer' and status = 'approved' ORDER BY total DESC ")->fetch_array();
					 $C66 = $conn->query("SELECT *, (SELECT COUNT(*) FROM votes v WHERE v.candidate_id = c.candidate_id) as total FROM tbl_candidate c WHERE position = 'Mass Media Officer' and status = 'approved' ORDER BY total DESC LIMIT 1,1;")->fetch_array();
					 $C662 = $conn->query("SELECT *, (SELECT COUNT(*) FROM votes v WHERE v.candidate_id = c.candidate_id) as total FROM tbl_candidate c WHERE position = 'Mass Media Officer' and status = 'approved' ORDER BY total DESC LIMIT 2,1;")->fetch_array();   
					 
					 $C7 = $conn->query("SELECT *, (SELECT COUNT(*) FROM votes v WHERE v.candidate_id = c.candidate_id) as total FROM tbl_candidate c WHERE position = 'senator' and status = 'approved' ORDER BY total DESC")->fetch_array(); 
					 $C77 = $conn->query("SELECT *, (SELECT COUNT(*) FROM votes v WHERE v.candidate_id = c.candidate_id) as total FROM tbl_candidate c WHERE position = 'senator' and status = 'approved' ORDER BY total DESC LIMIT 1,1;")->fetch_array();
					  ?>
							
						<div class="content-position">
							<ul>
								<li><b>President:</b> <?php echo $C1['firstname']." ".$C1['lastname']." - ".$C1['department']." - ".$C1['year_level'];?></li>
								<li><b>Vice President:</b> <?php echo $C2['firstname']."  ".$C2['lastname']." - ".$C2['department']." - ".$C2['year_level'];?></li>
								<li><b>Secretary:</b> <?php echo $C3['firstname']."  ".$C3['lastname']." - ".$C3['department']." - ".$C3['year_level'];?></li>
								<li><b>Treasurer:</b> <?php echo $C4['firstname']."  ".$C4['lastname']." - ".$C4['department']." - ".$C4['year_level'];?></li>
                                <li><b>Auditor:</b> <?php echo $C5['firstname']."  ".$C5['lastname']." - ".$C5['department']." - ".$C5['year_level'];?></li>
								
								<li><b>Mass Media Officer:</b> 
                                    <ul>
                                        <li> 1. <?php echo $C6['firstname']."  ".$C6['lastname']." - ".$C6['department']." - ".$C6['year_level'];?></li>
										<li> 2. <?php echo $C66['firstname']."  ".$C66['lastname']." - ".$C66['department']." - ".$C66['year_level'];?></li>
                                        <li> 3. <?php echo $C662['firstname']."  ".$C662['lastname']." - ".$C662['department']." - ".$C662['year_level'];?></li>
									</ul>
                                </li>

								<li><b>Senator:</b>
									<ul>
										<li>1. <?php echo $C7['firstname']."  ".$C7['lastname']." - ".$C7['department']." - ".$C7['year_level'];?></li>
										<li>2. <?php echo $C77['firstname']."  ".$C77['lastname']." - ".$C77['department']." - ".$C77['year_level'];?></li>
									</ul>
								</li>
							</ul>
						</div>
							<div class="content-admin">
								<h4><b>Prepared By:</b> <span>Ms. Elma R. Quiero</span></h4>        
								<h4 stlye="text-size:5px;"><em>SAO/Prefect of Discipline</em></h4>
								<br>
								<br>
								<h4><b>Noted By:</b> <span>Mr. Alfredo S. Moreno</span></h4>
								<h4 stlye="text-size:5px;"><em>Dean of College</em></h4>	
							</div>
							<button type="button" onclick="window.print();" style="margin-left: 2em;" id ="print" class = "pull-left btn btn-info"><i class = "fa fa-print"></i> Print
							</button>
					</div>
            </div>
                        <!-- /.panel-body -->
        </div>
                    <!-- /.panel -->
    </div>
            <!-- /.row -->
    <?php include ('script.php');?>

</body>

</html>

