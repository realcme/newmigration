<body>
<div style="font-size:10.0pt;font-family:Arial, Times, serif;color: #000000;clear: both;width: 620px;margin: auto;padding: 0px;">
<table style="border: 1px solid black; border-collapse: separate;" width="620px">
  <tr>
    <td>
      <table width="100%" style="border: 2px solid black; border-collapse: separate;">
        <tr>
          <td>
            <table width="100%" style="border: 1px solid black; border-collapse: separate;">
                <tr>
                  <td align="center" colspan="2" style="padding-top:5px;font-size:20pt;">Statement of Credit</td>
                </tr>          
                <tr>
                  <td align="left" colspan="2" style="padding-top:5px;font-size:9pt;"><span style="font-style:italic;">Issued to:</span><br/>
                    <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><br/> 
                    <?php print $certificate['address'] ?>
                  </td>
                </tr>          
                <tr>
                  <td align="center" colspan="2" style="padding-top:10px;font-style: italic;">Creative Educational Concepts, Inc. certifies that</td>
                </tr>          
                <tr>
                  <td align="center" colspan="2" style="padding-top:20px"><span style='font-size:14.0pt;font-weight: bold;'><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></span></td>
                </tr>          
                <tr>
                  <td align="center" colspan="2" style="padding-top:20px">has participated in the enduring material educational activity titled:</td>
                </tr>          
                <tr>
                  <td align="center" colspan="2" style="padding-top:10px"><span style='font-weight:bold;'><?php print $certificate['course_title'] ?></span></td>
                </tr>          
                <tr>
                  <td align="center" colspan="2" style="padding-top:15px">on: <span style='font-weight:bold;'><?php print $certificate['dateearned'] ?></span></td>
                </tr>
                <tr>
                  <td align="center" colspan="2" style="padding-top:15px">Continuing Education Contact Hours Awarded: <?php print $certificate['creditearned']?> Hours of ANCC Credit</td>
                </tr>
                <tr>
                  <td align="center" colspan="2" style="padding-top:15px">Contact Hours Dedicated to Pharmacology: <?php print $certificate['pharmacology']?>  contact hours of ANCC Pharmacology Credit</td>
                </tr>   
                <tr>
                  <td align="center" colspan="2" style="padding-top:25px">&nbsp;</td>
                </tr>               
                <tr>
                  <td align="center" style="width:50%;vertical-align:middle">
                    <img src="<?php print $img_url ?>ceconcepts_signature.png" ></img><br/>
                    <hr style="border: 0;color: #000000;background-color: #000000;height:1px;width: 90%;" />
                    <div style="padding-left:10pt;">
                      Janet W. Cline, RPh<br/>
                      President
                    </div>
                  </td>
                  <td align="center" style="width:50%;vertical-align:middle">
                    &nbsp;<br/>
                    <hr style="border: 0;color: #000000;background-color: #000000;height:1px;width: 90%;" />
                    <div style="padding-left:10pt;">
                      Participant
                    </div>
                  </td>
                </tr>
                <tr>
                  <td align="center" colspan="2" style="padding-top:15px"><img src="<?php print $img_url?>ceconcepts_accreditors.png"/></td>
                </tr>
                <tr>
                  <td align="center" colspan="2" style="padding-top:5px;font-size:8pt;">In support of improving patient care, Creative Educational Concepts, Inc. (CEC) is accredited by the American Nurses Credentialing Center (ANCC), the Accreditation Council for Pharmacy Education (ACPE), and the Accreditation Council for Continuing Medical Education (ACCME), to provide continuing education for the healthcare team.</td>
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
