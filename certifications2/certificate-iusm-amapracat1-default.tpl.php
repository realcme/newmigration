<body>
<div style="font-size:11.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;width: 620px;margin: auto;padding: 0px;">
<table style="border: 1px solid black; border-collapse: separate;" width="620px">
  <tr>
    <td>
      <table width="100%" style="border: 2px solid black; border-collapse: separate;">
        <tr>
          <td>
            <table width="100%" style="border: 1px solid black; border-collapse: separate;">
                <tr>
                  <td align="center" colspan="2" style="padding-top:5px"><img src="<?php print $img_url ?>iusm_logo.gif" width="400px" height="159px"></img></td>
                </tr>          
      
                <tr>
                  <td align="center" colspan="2" style="padding:15px 10px 10px 10px;font-style: italic;font-weight: bold">The Indiana University School of Medicine Division of Continuing Medical Education certifies that</td>
                </tr>          
                <tr>
                  <td align="center" colspan="2" style="padding-top:20px"><span style='font-size:14.0pt;font-weight: bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><?php print $occupation?></span></td>
                </tr>          
                <tr>
                  <td align="center" colspan="2" style="padding-top:20px">has completed the requirements for enduring materials <br/> for the following educational activity:</td>
                </tr>          
                <tr>
                  <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight:bold;'><?php print $certificate['course_title'] ?></span></td>
                </tr>          
                <tr>
                  <td align="center" colspan="2" style="padding-top:15px">Completed on <span style='font-weight:bold;'><?php print $certificate['dateearned'] ?></span>           
                  </td>
                </tr>
                <tr>
                  <td align="center" colspan="2" style="padding-top:15px">This activity was designated for <?php print $certificate['amapracat1'].$pratext ?>           
                  </td>
                </tr>
                <tr>
                  <td align="center" colspan="2" style="padding-top:15px;padding-bottom:20px">The Indiana University School of Medicine is accredited by the Accreditation Council for Continuing Medical Education to provide continuing medical education for physicians</td>
                </tr>  
                <tr>
                  <td align="center" colspan="2" style="padding-top:15px;padding-bottom:20px">
                  <div style="width:250px;text-align:left;font-size:10pt">
                  <img src="<?php print $img_url ?>iusm_signature3.jpg" width="186px" height="28px"></img>	
                  <hr style="border: 0;color: #000000;background-color: #000000;height:1px;width:100%;margin-top:0" />
                  Alexander Djuricich, MD	<br/>
                  Associate Dean	<br/>
                  Continuing Medical Education	<br/>				      
                  Indiana University School of Medicine	<br/>
                  </div>
                  </td>
                </tr>  
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</div>
<script>print();</script>
</body>
