<body>
<div style="font-size:11.0pt;font-family:Times New Roman, Times, serif;color: #000000;clear: both;width: 620px;margin: auto;padding: 0px;">
<img src="<?php print $img_url?>cdr_logo2.png" alt="logo" /> 
	<span>Continuing Professional Education Certificate of Attendance</span>
<table cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3" valign="bottom" align="center"  style="width: 604px;margin: 0px;padding: 0px; height: 20px;line-height: 0px">
      Attendee Copy
    </td>
  </tr>
  </table>
    
	<table>

          <tr style="height:50px">
            <td style="width:100%;">
              Participant Name: <span style="display:inline-block; min-width:400px; border-bottom: 1px solid black;"><?php print $certificate['firstname'] ?> <?php print $certificate['lastname'] ?> </span>
            </td>

          </tr>      
          <tr style="padding-top:20px">
            <td style="">
              Registration Number: <span style="display:inline-block; min-width:400px; border-bottom: 1px solid black;"></span>
            </td>

          </tr>       
          </table>
          <table>  
          <tr style="padding-top:20px">
            <td style=" padding-bottom: 40px;">
              Activity Title: <span style=" "> <?php print $certificate['course_title'] ?> </span>
            </td>

          </tr>  
          </table>
          <table>
          
          <tr style="padding-top:60px height: 40px;">
            <td style="">
              Activity Number: <span style="display: inline-block; "> <?php print $certificate['@cdr_session_number'] ?> </span>
            </td>
            <td> 
            </td>
          </tr>    
          
          
      </table>
      <table>
          <tr style="padding-top:25px height:20px;">
            <td style="width:50%;">
              Date Completed: <span style=" width:100%; border-bottom: 1px solid black;"> <?php print $certificate['dateearned'] ?> </span>
            </td>
            <td>
            	<span style="padding-left: 10px; display: inline-block; ">Number of CPEUs Awarded: <?php print $certificate['creditearned']; ?> </span>
            </td>
          </tr> 
          
          <tr style="padding-top:25px">
            <td style="width:50%;">
              Learning Code(s): <?php print $certificate['@cdr_learning_need_code'] ?>
            </td>

            <td>
            	<span style="padding-left: 10px; display: inline-block; ">CPE Level: <?php print $certificate['@cdr_cpe_level'] ?> </span>
            </td>
          </tr>         
          </table>
          <table>
          
          <tr style="padding-top:25px">
            <td style="width:10%;">
              Provider Signature:
            </td>
            <td style="width:20%;"> 
            	<img src="<?php print $img_url?>cdr_sig2.png" alt="logo" style="max-width: 200px;" /> 
            </td>
          </tr>   
          </table>
          <table>
          <tr style="height: 40px;">
          <td style="width:60%;"></td>
          		<td>
          			<span style="font-size: xx-small;">RETAIN ORIGINAL COPY FOR YOUR RECORDS </span>
          		</td>
          </tr>
         
          
</table>
</div>
<script>print();</script>
</body>
