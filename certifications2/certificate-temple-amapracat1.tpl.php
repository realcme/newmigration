<body>
<div style="font-size:11.0pt;font-family:Times New Roman, Times, serif;color: #000000;clear: both;margin: auto;width: 600px;padding: 0px;">
<table width="610px" style="border: 0px;">
          <tr>
            <td align="left" style="width:235px;padding-top:5px;vertical-align:top;">
            <img src="<?php print $img_url?>temple_logo.jpg" style="width: 230px; height: 34px;"></img>
            </td>
            <td align="right" style="width:375px;padding-top:5px;vertical-align:top;font-size:8pt">
            	<table>
            		<tr>
            		<td style="text-align:left;vertical-align:top;">
            		The Albert J. Finestone, M.D.<br/>
                Office for Continuing Medical Education<br/>
                3440 North Broad Street, 1st Fl. Kresge<br/>
                Philadelphia, PA 19140<br/>
            		</td>
            		<td style="text-align:left;vertical-align:top;padding-left:5px">
            		<span style="font-style:italic">phone</span> 215-707-4787<br/>
                <span style="font-style:italic">fax</span> 215-707-8268<br/>
                <span style="font-style:italic">web</span> www.temple.edu/cme<br/>
                <span style="font-style:italic">email</span> cme@temple.edu<br/>
            		</td>
            		</tr>
            	</table>
            	</td>
          </tr>         
          <tr>
            <td colspan="2" style="padding:15px 20px;text-align:left">
            	<?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><br/>
            	<?php print $certificate['address'] ?> <br/>
            </td>
          </tr>  			        
          <tr>
            <td align="center" colspan="2">
              <table width="100%" style="border: 2px solid black;">
			          <tr>
			            <td align="center" colspan="2" style="padding:15px 0px 5px 0px;font-size:16pt;font-weight:bold;font-style:italic">Temple University School of Medicine</td>
			          </tr>  
			          <tr>
			            <td align="center" colspan="2" style="font-size:14pt;font-weight:bold;font-style:italic">Continuing Medical Education Certificate</td>
			          </tr>  
			          <tr>
			            <td align="left" colspan="2" style="padding:15px 20px;">Temple University School of Medicine is accredited by the Accreditation Council for 
			            Continuing Medical Education (ACCME) to sponsor Continuing Medical Education for physicians.<br/><br/>
			            Temple University School of Medicine designates this <?php print $certificate['@ed'];?> activity for a <br/> maximum of <?php print $certificate['amapracat1'].$pratext ?>
			            </td>
			          </tr>  
			        
			        
			          <tr>
			            <td align="center" colspan="2" style="padding:10px 20px">Temple University School of Medicine certifies that:</td>
			          </tr>    
			          <tr>
			            <td align="center" colspan="2" style="padding:10px 20px;font-weight:bold"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
			          </tr>    
			          <tr>
			            <td align="center" colspan="2" style="padding:10px 20px">has participated in the <?php print $certificate['@ed'];?> activity titled:</td>
			          </tr>  	  
			          <tr>
			            <td align="center" colspan="2" style="padding:10px 20px;font-weight:bold"><?php print $certificate['course_title'] ?></td>
			          </tr>   
			          <tr>
			            <td align="center" colspan="2" style="padding:10px 20px">between <?php print $certificate['begin_date'] ?> and  <?php print $certificate['expiration_date'] ?></td>
			          </tr> 
			          <tr>
			            <td align="center" colspan="2" style="padding:10px 20px">and is awarded <?php print $certificate['creditearned'].$pratext ?></td>
			          </tr> 
              </table>
            </td>
          </tr>       

</table>
</div>
<script>print();</script>
</body>
