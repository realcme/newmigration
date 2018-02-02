<body>
<div style="font-size:11.0px;font-family:Georgia, Times, 'Times New Roman', serif;color: #000000;clear: both;width: 620px;margin: auto;padding: 0px;">
    <table style="width: 624px; margin: 0px;padding: 0px;">
		<tr><td style="border: 2px solid black; margin: 0px; padding: 3px;">
    <table style="border: 2px solid black; width: 620px;">
        <tr>
        <td align="center" style="font-size: 20px;font-weight:bold;">Learner Paced<br/>Continuing Nursing Education Contact Hour Certificate</td>
      </tr>
      <tr>
        <td align="center" style="padding-top:6px;">This Learner Paced continuing nursing education activity is provided by</td>
      </tr>          
      <tr>
        <td align="center" style="padding-top:6px">
           <img src="<?php print $img_url;?>vindico_logo.png" alt="Vindico" />
          </td>
      </tr>       
      <tr>
        <td align="center" style="padding-top:12px;">This is to certify</td>
      </tr>          
      <tr>
        <td align="center" style="padding-top:6px;font-size:20px;text-transform: uppercase;font-weight:bold;">
          <?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?>
          </td>
      </tr>       
      <tr>
        <td align="center" style="padding-top:6px;">has participated in the educational activity</td>
      </tr>          
      <tr>
        <td align="center" style="padding-top:6px;text-transform: uppercase;"><?php print $certificate['course_title'] ?></td>
      </tr>    
      <tr>
        <td align="center" style="padding-top:6px;">on</td>
      </tr>          
      <tr>
        <td align="center" style="padding-top:6px;text-transform: uppercase;"><?php print $issue_date ?></td>
      </tr>    
      <tr>
        <td align="center" style="padding-top:6px;">and is awarded <?php print $certificate['creditearned'] ?> contact hour(s), based on 60-minute contact hours.</td>
      </tr>          
      <tr>
        <td align="center" style="padding-top:6px;">Vindico Medical Education, LLC is accredited as a provider of continuing nursing education by the American Nurses Credentialing Center's Commission on Accreditation.</td>
      </tr>          
      <tr>
        <td align="center" style="padding-top:6px;">Nurses should receive contact hours on an hour-to-hour basis not to exceed <?php print $certificate['ancc'] ?> contact hours.</td>
      </tr>          
      <tr>
        <td align="center" style="padding-top:6px;">Thank you for your participation in the Learner Paced CNE activity.<br/>We have received and scored your quiz, and you have received a passing grade.</td>
      </tr>          
      <tr>
        <td align="center" style="padding-top:12px;text-transform: uppercase;">
			<?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?><br/>
			<?php print $certificate['address'] ?>
        </td>
      </tr>          
      <tr>
        <td align="center" style="padding-top:20px;padding-bottom:0;font-size: 8px;">Vindico Medical Education • 6900 Grove Road, Bldg. 100 • Thorofare, NJ 08086 • (856) 994-9400</td>
      </tr>          
	            
    </table></td></tr></table>  
  </div>
<script>print();</script>
</body>
