<body>
<div style="font-size:12.0pt;font-family:Times New Roman, Times, serif;color: #000000;width: 626px;clear: both;">
<table width="600px">
          <tr>
            <td align="left" colspan="2" style="padding-top:5px"><img src="<?php print $img_url?>upennhershey_logo.png"></img></td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:5px;font-size:16pt;font-weight:bold">Continuing Education</td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:15px;">This certifies that</td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding-top:10px;font-weight:bold"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding-top:10px;">has participated in the enduring material</td>
          </tr>          
          <tr>
            <td align="left" colspan="2" style="padding-top:10px;font-weight:bold"><?php print $certificate['course_title'] ?></td>
          </tr>         
          <tr>
            <td align="left" colspan="2" style="padding-top:10px;">on <span style="font-weight:bold"><?php print $certificate['dateearned'] ?></span></td>
          </tr>
          <tr>
            <td align="left" colspan="2" style="padding-top:10px;">This activity was designated for </td>
          </tr> 
          <tr>
            <td align="left" colspan="2" style="padding-top:10px;font-weight:bold"><?php print $credit.$pratext?></td>
          </tr>    
          <tr>
            <td align="left" colspan="2" style="padding-top:10px;">Course #:  <?php print $certificate['@number']?></td>
          </tr>  
          <tr>
              <td align="left" colspan="2" style="padding-top:10px;font-size:10pt;">
                <img src="<?php print $img_url?>upennhershey_signature.png"/><br/>
                William L. Hennrikus, MD, Associate Dean for Continuing Medical Education
            </td>
          </tr>      
          <tr>
            <td align="left" colspan="2" style="padding-top:25px;font-style:italic;font-size:10pt;">Penn State College of Medicine is accredited by the Accreditation Council for Continuing Medical Education 
to provide continuing medical education for physicians.  <br/><br/>
Penn State Continuing Education, PO Box 851, Hershey, PA  17033-0851 &bull;  717-531-6483
            </td>
          </tr>        
</table>
</div>
<script>print();</script>
</body>
