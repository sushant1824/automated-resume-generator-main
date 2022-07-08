

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./temp1.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" media="mediatype and|not|only (expressions)" href="print.css">
  </head>

    <body bgcolor="grey">
        <div class="main">
            <div class="profile-img"><img src="<?php echo "".$row['photo']?>" alt=""></div>
            <h1><?php echo "".$row['name']?></h1>
            <h3 class="ft1"><?php echo "".$row['title']?></h3>
             
          <div class="essentials"> 
              <ul style="list-style-type: none;">
                 <li> <?php echo "".$row['email']?> &nbsp;  <i class="fa fa-envelope-open"></i></li>
                 <br>
                 <li><?php echo "".$row['phone']?>&nbsp;<i class="fa fa-phone-square" aria-hidden="true"></i></li>
                 <br>
                 <li><?php echo "".$row['address']?> &nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i></li>
                 <br>
                 <li><?php echo "".$row['dob']?> &nbsp;<i class="fa fa-calendar" aria-hidden="true"></i></li>
              </ul>
              
          </div>
          <hr class="new1">
          <!--left-->
           <div class="left">
             <h2>ABOUT ME</h2>
             <p class="p2"><?php echo "".$row['bio']?></p>
            <br> <br>
             <h2 > EDUCATION</h2>
             <p class="ft123"><b>Senior secondary school&nbsp;<br></b><?php echo "".$row['school_name']?>&nbsp;</p>
             <p  class="ft16"><i><?php echo "".$row['school_start_date']?>&nbsp;-&nbsp;<?php echo "".$row['school_end_date']?></i></p>
             <!--<p ><i>Courses</i></p>
             <ul class ="ft12"><li>computer science</li></ul>
                <br>-->
                <p class="ft124"><b><?php echo "".$row['college_1_name']?><br></b>&nbsp;</p>  
                <p  class="ft16"><i><?php echo "".$row['college_1_start_date']?>&nbsp;-&nbsp;<?php echo "".$row['college_1_end_date']?></i></p>
             <p ><i>Courses</i></p>
             <ul class ="ft12"><li><?php echo "".$row['college_1_course_name']?></li></ul>
             <br>
                <p class="ft124"><b><?php echo "".$row['college_2_name']?><br></b>&nbsp;</p>  
                <p  class="ft16"><i><?php echo "".$row['college_2_start_date']?>&nbsp;-&nbsp;<?php echo "".$row['college_2_end_date']?></i></p>
             <p ><i>Courses</i></p>
             <ul class ="ft12"><li> <?php echo "".$row['college_2_course_name']?></li></ul>
             <br>
                <p class="ft124"><b><?php echo "".$row['college_3_name']?><br></b>&nbsp;</p>  
                <p  class="ft16"><i><?php echo "".$row['college_3_start_date']?>&nbsp;-&nbsp;<?php echo "".$row['college_3_end_date']?></i></p>
             <p ><i>Courses</i></p>
             <ul class ="ft12"><li> <?php echo "".$row['college_3_course_name']?></li></ul>
             <br> <br>
             <h2 > WORK EXPERIENCE</h2>
             <br>
             <p class="ft124"><b><?php echo "".$row['work_1_company']?><br></b></p>  
                <p  class="ft16"><i><?php echo ''.$row['work_1_start_date']?>&nbsp;-&nbsp;<?php echo "".$row['work_1_end_date']?></i></p>
             <p ><i>JOB ROLE</i></p>
             <ul class ="ft12"><li> <?php echo "".$row['work_1_role']?></li></ul>
             <br>
             <br>
             <p class="ft124"><b><?php echo "".$row['work_2_company']?><br></b></p>  
                <p  class="ft16"><i><?php echo "".$row['work_2_start_date']?>&nbsp;-&nbsp;<?php echo "".$row['work_2_end_date']?></i></p>
             <p ><i>JOB ROLE</i></p>
             <ul class ="ft12"><li> <?php echo "".$row['work_2_role']?></li></ul>
             <br>
             <br>
             <h2 > CERTIFICATES</h2>
             <br>
             <p class="ft124"><b><?php echo "".$row['certificate_1_name']?><br></b></p>  
                <p  class="ft16"><i><?php echo ''.$row['certificate_1_date']?>&nbsp;/i></p>
             
                
             <br>
             <p class="ft124"><b><?php echo "".$row['certificate_2_name']?><br></b></p>  
                <p  class="ft16"><i><?php echo ''.$row['certificate_2_date']?>&nbsp;</i></p>
                
                <br>
                <p class="ft124"><b><?php echo "".$row['certificate_3_name']?><br></b></p>  
                   <p  class="ft16"><i><?php echo ''.$row['certificate_3_date']?>&nbsp;</i></p>
                   
                   

           </div>
          <!--right-->
           <div class="right">
            <h2 >  PERSONAL PROJECTS</h2>
            <p ><i><?php echo "".$row['project_1_name']?>/i></p>
            <p  class="ft16"><i><?php echo ''.$row['project_1_date']?>&nbsp;</i></p>
            <ul class ="ft12"><li> <b>Project Features-</b><?php echo "".$row['project_1_feature']?></li>
              <li> <b>Project Outcome-</b><?php echo "".$row['project_1_outcome']?></li>
              <li> <b>Tools used-</b><?php echo "".$row['project_1_tools_used']?></li></ul>
              <br><br>
              <p ><i><?php echo "".$row['project_2_name']?></i></p>
            <p  class="ft16"><i><?php echo ''.$row['project_2_date']?>&nbsp;</i></p>
            <ul class ="ft12"><li> <b>Project Features-</b><?php echo "".$row['project_2_feature']?></li>
              <li> <b>Project Outcome-</b><?php echo "".$row['project_2_outcome']?></li>
              <li> <b>Tools used-</b><?php echo "".$row['project_2_tools_used']?>.</li></ul>
              <br><br>
              <p ><i><?php echo "".$row['project_3_name']?></i></p>
            <p  class="ft16"><i><?php echo ''.$row['project_3_date']?>&nbsp;</i></p>
            <ul class ="ft12"><li> <b>Project Features-</b><?php echo "".$row['project_3_feature']?></li>
              <li> <b>Project Outcome-</b><?php echo "".$row['project_3_outcome']?></li>
              <li> <b>Tools used-</b><?php echo "".$row['project_3_tools_used']?></li></ul>
              <br><br>

              <h2 > SKILLS</h2> <br>
              <h4 class="ft90"><?php echo "".$row['skills_1']?></h4>
              <h4 class="ft90"><?php echo "".$row['skills_2']?></h4>
              <h4 class="ft90"><?php echo "".$row['skills_3']?></h4>
              <br> <br>
              <h4 class="ft90"><?php echo "".$row['skills_4']?></h4>
              <h4 class="ft90"><?php echo "".$row['skills_5']?></h4>
              <br> <br>
              <h2 > LANGUAGES</h2> <br>
              <p><b><?php echo "".$row['lang_1']?></b>
                <div class="slidecontainer">
                  <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                </p>
                </div>
               <br>
              <p><b><?php echo "".$row['lang_2']?></b>
                <div class="slidecontainer">
                  <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                </p>
                </div>
                <br>
                <p><b><?php echo "".$row['lang_3']?></b>
                  <div class="slidecontainer">
                    <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                  </p>
                  </div>
                 <br> <br>
                  <h2>INTERESTS</h2>
                  <br>
                  <ul class ="ft10">
                      <li><?php echo "".$row['interest_1']?></li>
                    <br>
                    <li><?php echo "".$row['interest_2']?></li>
                    <br>
                    <li><?php echo "".$row['interest_3']?></li>
                </ul>
           </div>


          </div>     
                  
    </body>
        
</html>
