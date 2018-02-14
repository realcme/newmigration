<body>
<div style="font-size:11.0pt;font-family:Times New Roman, Times, serif;color: #000000;width: 600px;margin: auto;clear: both;">
<table width="600px" style="border: 5px solid black;padding:10px">
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;font-size:18pt;border-bottom:1px solid black">STATEMENT OF PARTICIPATION</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;">The Institute for Medical Education &amp; Research, Inc. certifies that:</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;font-size:18pt;text-decoration:underline;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?></td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:5px;">has participated in the educational activity titled</td>
          </tr>
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;font-weight: bold;"><?php print $certificate['course_title'] ?></td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:10px;">a continuing nursing education activity on <?php print $certificate['dateearned'] ?></td>
          </tr>    
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;">
            This educational activity for <?php print $certificate['ancc']?> contact hours is provided by the Institute for Medical Education &amp; Research, Inc. (IMER).
					 IMER is an approved provider of continuing nursing education by the Georgia Nurses Association, an accredited approver by 
						the American Nurses Credentialing Center's Commission on Accreditation.
            </td>
          </tr>    
          <tr>
            <td align="center" colspan="2" style="padding-top:15px;border-bottom:1px solid black">
            IMER Program ID: <?php print $certificate['@imerid']?>
            </td>
          </tr>         
          <tr>
            <td style="text-align:center;vertical-align:top;width: 50%;font-size:10pt;padding-top:20px;" > 
            <img src="<?php print $img_url?>imer_logo.png"></img><br/>
            Institute for Medical Education &amp; Research, Inc.<br/>
            12550 Biscayne Blvd, Suite 900<br/>
            North Miami, Florida 33181<br/>
            (305) 892-1035 - Phone<br/>
            (305) 892-1039 - Fax<br/>
            </td>
            <td style="text-align:center;vertical-align:top;font-size:10pt;padding-top:20px;">
              <img src="<?php print $img_url?>imer_signature.jpg"></img>
              <br/>
              Drace Langford, MSG<br/>
							Continuing Education Director<br/>
							Institute for Medical Education &amp; Research<br/>
            </td>
          </tr>  
          <tr>
            <td align="center" colspan="2" style="padding-top:40px">&nbsp;</td>
          </tr>     
</table>
</div>
<script>print();</script>
</body>
