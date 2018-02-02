<body style="padding: 0; margin: 0;">
<div style="font-size:11.0pt;font-family: Times, serif;width: 600px;margin: auto;">
  <div style="width: 100%;">
    <h3 class="title" style="width: 100%; border-bottom: 1px solid #000; text-align: center; font-weight: bold; padding: 23px 0; ">Statement of Continuing Nursing Education Credit</h3>
    <div class="content" style="width: 100%;">
      <div class="participant" style="width: 50%; float: left;">
       <h3 class="participantTitle">Participant Information</h3>
       <p><?php print $certificate['firstname']; ?> <?php print $certificate['lastname']; ?></p>
       <p><?php print $certificate['address'];?></p>
      </div>
      <div class="provider" style="width: 50%; float: right;">
        <h3>Provider Information</h3>
        <p>SolutionSight, Inc.</p>
        <p>2191 Avalon Dr.</p>
        <p>Buffalo Grove, IL 60089</p>
        <img src="http://www.solutionsight.com/s/cc_images/cache_934258606.jpg" alt="SolutionSight, Inc." />
      </div>
      <div class="courseInfo" style="clear: both; padding-top: 20px;">
        <h3>Course Information</h3>
        <p><?php print $certificate['course_title'];?></p>
        <div class="courseInfoLeft" style="width: 45%; float: left;">
	  <p class="text-left"><b>Reference Number#:</b></p> <p class="text-right"><?php print $certificate['refid'];?></p>
	  <p class="text-left"><b>Credit Hours Earned:</b></p> <p class="text-right"><?php print $certificate['creditearned'];?></p>
	  <p class="text-left"><b>CEUs:</b></p> <p class="text-right"><?php print $ceu;?></p>
	  <p class="text-left"><b>Date Program Completed:</b></p> <p class="text-right"><?php print $issue_date;?></p>
	  <p class="text-left"><b>Date Statement Issued:</b></p> <p class="text-right"></p> <p class="text-right"><?php print $completed_date;?></p>
        </div>
	<div class="courseInfoRight" style="float: right; width: 48%;">
          <p>Authorized by Kathy Hall</p>
          <p>SolutionSight, Inc.</p>
	  <img src="/cms/sites/all/themes/cmecertificatetheme/img/kathy_hall_signature.png" height="93" width="250"/>
          <p>Date 01/09/2015</p>
          <p style="font-size:10pt; margin-top: 10px;"><img width="56" height="55" style="float:left" src="/cms/sites/all/themes/cmecertificatetheme/img/solutionsight_accredited_provider.png" ?>SolutionSight, Inc. is accredited as a provider of
continuing nursing education by the American
Nurses Credentialing Center's Commission on
Accreditation.<br><br>
SolutionSight, Inc. is approved by the California Board of
Registered Nursing, Provider # CEP 14624. The Licensee must
retain this Statement of Credit for four years after the conclusion
of the activity.</p>
        </div>
        <div class="footer" style="border-top: 1px solid #000; clear: both; text-align: center; padding-top: 10px; margin-top: 10px;">
          <span style="margin-right: 20px"><b>http://solutionsight.rxschool.com</b></span> <b>RxS UID</b> LZQZ-21QD1254-75AG
        </div>
      </div>
    </div>
  </div>
</div>

<script>print();</script>

</body>
