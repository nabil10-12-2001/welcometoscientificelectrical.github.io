<?php 
ob_start();
extract($_REQUEST);

/*echo "<pre>";
print_r($_REQUEST);
print_r($_FILES);
echo "</pre>";*/

function multi_attach_mail($to, $subject, $message, $senderMail, $senderName, $files){


    $from = $senderName." <".$senderMail.">"; 

    $headers = "From: $from";

    // boundary 

    $semi_rand = md5(time()); 

    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

    // headers for attachment 

    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

    // multipart boundary 

    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .

    "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n"; 

    // preparing attachments



    if(count($files) > 0){

        for($i=0;$i<count($files);$i++){

            if(is_file($files[$i])){

                $message .= "--{$mime_boundary}\n";

                $fp =    @fopen($files[$i],"rb");

                $data =  @fread($fp,filesize($files[$i]));

                @fclose($fp);

                $data = chunk_split(base64_encode($data));

                $message .= "Content-Type: application/octet-stream; name=\"".basename($files[$i])."\"\n" . 

                "Content-Description: ".basename($files[$i])."\n" .

                "Content-Disposition: attachment;\n" . " filename=\"".basename($files[$i])."\"; size=".filesize($files[$i]).";\n" . 

                "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";

            }

        }

    }



    $message .= "--{$mime_boundary}--";

    $returnpath = "-f" . $senderMail;

    //send email

    $mail = @mail($to, $subject, $message, $headers, $returnpath); 

    //function return true, if email sent, otherwise return fasle

    if($mail){ return TRUE; } else { return FALSE; }

}

if (isset($_POST['btnSubmit']) || isset($_POST['btnSubmit_x'])) {

    if ($_POST['txtEmail'] != '' && $_POST['txtName'] != '' && $_POST['txtMessage'] != '') {

        $subject = "Enquiry - " .$_POST['txtSubject'];

        $sendTo = "sales@safeoneearthing.com";
        //$sendTo = "mukesh@notiontechnologies.com";

        $fromEmail = "sales@safeoneearthing.com";



        $fromName = $_POST['txtName'];



        $email_message = "Name: ".$_POST['txtName']."\n\n";

        $email_message .= "<br>Email address: ".$_POST['txtEmail']."\n\n";

        $email_message .= "<br>Phone: ".$_POST['txtPhone']."\n\n";

        // $email_message .= "Subject: ".$_POST['txtSubject']."\n\n";

        $email_message .= "<br>Message: ".$_POST['txtMessage']."\n\n";


        // Read POST request params into global vars
        // Obtain file upload vars
        $fileatt = $_FILES['fileatt']['tmp_name'];
        $fileatt_type = $_FILES['fileatt']['type'];
        $fileatt_name = $_FILES['fileatt']['name'];
        $destination = "./upload/";

        $new_filename = time()."_".$fileatt_name;
        
        @copy($fileatt, $destination.$new_filename);
        

        $attached_files = array('./upload/'.$new_filename);
        
        $ans = multi_attach_mail($sendTo,$subject,$email_message,$fromEmail,$fromName,$attached_files);

        if ($ans)
            $success = "Thanks for your enquiry. We will get back to you soon.";
        else
            $error = "Error while sending email.";

    } else {
        $error = "Please fill all details.";
    }
}
?>
<?php include('includes/lead.php')?>
<section style="background-color:cornflowerblue;">
<!-- <div class=contact_img>
    <div class="gif" style="center;display: flex;height: 15vh;padding:12px 10px;justify-content: center;/* align-items: center; */">
        <img src="./images/contactusnew.gif" alt="loading..">
    </div>
</div> -->
    <div class="content" style="padding: 45px 12px;">
        <?php if(!empty($success)) { ?>
            <div class="alert alert-success"><?php echo $success;?></div>
        <?php } ?>
        <?php if(!empty($error)) { ?>
            <div class="alert alert-danger"><?php echo $error;?></div>
        <?php } ?>
        <div class="contact-wrap" style="border:10px solid purple;">
           
                <div class="left-col" data-aos="fade-up" data-aos-duration="3000" style="
    background-color: black;
">
                    <div class="c_img">
                        <img src="./images/Contact_Us_Web_pa.jpg" alt="loading.." style="width: 251px;
    height: 130px;
    display: flex;
    padding: 25px 10px;
    margin: auto;">
                    </div>
                    <div class="contact_info">
                        <div class="info_item">
                        <!-- <i class="fa fa-home"></i> -->
                        <h6 style="color:purple;">Office Address </h6>
                        <p style="color:white;">16/17 CR LOYALKA LANE INDIA MARKET, Khairani Road opp. AH Masjid, Saki Naka
                                   Andheri, Maharashtra 400072.</p>
                        </div>
                        <div class="info_item">
                        <!-- <i class="fa fa-phone"></i> -->
                        <h6 style="color:purple;">Phone</h6>
                       
                        <a href="tel:9833420337" style="color:white;">+91 9833 420 337</a>
                        <a href="tel:9987978712" style="color:white;">+91 9987978712</a>
                        </div>
                        <div class="info_item mt-3">
                        <!-- <i class="fa fa-envelope"></i> -->
                        <h6 style="color:purple;">Email Id</h6>
                            <a style="color:white;">sales@scientificelectrical.com</a>
                            
                            <a style="color:white;">rasheed@scientificelectrical.com</a>
                            <a style="color:white;">rafiq@scientificelectrical.com</a>
                        </div>
                    </div>
                </div>
                <div class="right-col" style="background-color:purple;">
                    <form class="row contact_form" action="" enctype="multipart/form-data" method="post" id="contactForm" onsubmit="javascript: return validateContact();">
                        <div class="col-md-6">
                        <div class="form-group">
                        <input type="text" class="form-control" id="txtName" name="txtName" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                        <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Enter email address">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="txtSubject" name="txtSubject" placeholder="Enter Subject">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="file" name="fileatt" id="fileatt">
                        </div>
                        </div>
                        <div class="col-md-6">
                         <div class="form-group">
                            <input type="text" class="form-control" id="txtPhone" name="txtPhone" placeholder="Enter Phone No.">
                        </div>
                        <div class="form-group">
                        <textarea class="form-control" name="txtMessage" id="txtMessage" rows="5" placeholder="Enter Message" spellcheck="false"></textarea>
                        </div>
                        </div>
                        <div class="col-md-12 text-right">
                        <button type="submit" value="submit" name="btnSubmit" class="btn submit_btn view-more">Send Message</button>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
<section style="padding-top:10px;padding-bottom:20px;">
<div class="container" style="
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
">
<div class="row" style="display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;">
<div class="col-md-4"
    >
<div class="txtcntr"style="position:relative; text-align: center; font-weight:500; ">
 <a href="" class="btn" style 
   >Download Company Profile</a>
 </div>
        </div>
<div class="col-md-4">
<div class="txtcntr"style="position:relative; text-align:center; font-weight:500;">
 <a href="" class="btn">Vendor Registration    </a>
 </div>
        </div>
<div class="col-md-4">
<div class="txtcntr"style="position:relative; text-center; font-weight:500;">
 <a href="" class="btn">Career Openings     </a>
 </div>
        </div>

<!-- <div class="row">
<div class="col-md-4">
<div class="txtcntr"style="position:relative;">
 <a href="" class="btn">       Vendor Details       </a>
 </div>
</div>
<div class="row">
<div class="col-md-4">
<div class="txtcntr"style="position:relative;">
 <a href="" class="btn">carrier openings</a>
 </div>
</div> -->



</div>
</div>
</section>
<section class="section p-b-80">
    <div class="container" style="
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;">
        <div class="row" style="
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;">
            <div class="col-lg-12"style="position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;">
                <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.139627044327!2d72.89407181473014!3d19.10152958707329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9e24ae04791%3A0xf2536217fbef7b23!2sSAFEONE%20EARTHING.(Chemical%20Earthing%20Electrodes)!5e0!3m2!1sen!2sin!4v1624720075380!5m2!1sen!2sin" width="1200" height="450" style="border:0;"
             allowfullscreen="" loading="lazy">
        </iframe>
                </div>
            </div>
        </div>
    </div>
                </section>
<?php include('includes/footer.php')?>

<script>

function validateContact()

{

    //alert("Mukesh");



    var error = false;

    //jQuery.noConflict();

    //jQuery(".border-danger").hide();

    $(".text-danger").hide();



    var validEmailStr = /^[a-zA-Z0-9][\w\.-]*[a-zA-Z0-9]@[a-zA-Z0-9][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/;

    

    var validNumberStr = /^[0-9]$/;



    var txtName = $("#txtName").val();    

    //alert("txtName" + txtName);

    

    if(txtName.length == ''){

           

        var error = true;

        $("#txtName").addClass('border-danger');

        $("#txtName").focus();

        return false;

     

     }    

     else

        $("#txtName").removeClass('border-danger');

    



    var txtEmail  = $("#txtEmail").val();

    if(txtEmail.length == 0){

        

        var error = true;

        $("#txtEmail").addClass('border-danger');

        $("#txtEmail").focus();

        return false;

    

    }

    else if (validEmailStr.test(txtEmail) == false) {

        $("#txtEmail").addClass('border-danger');

        $("#txtEmail").after("<div class='text-danger'>Invalid email address entered.</div>");

        $("#txtEmail").focus();

        hasError = true;

        return false;

    }
    else
        $("#txtEmail").removeClass('border-danger');

    var txtSubject = $("#txtSubject").val();

    if(txtSubject == ''){
        var error = true;
        $("#txtSubject").addClass('border-danger');
        $("#txtSubject").focus();
        return false;
    }     
    else
        $("#txtSubject").removeClass('border-danger');

    // var fileatt = $("#fileatt").val();

    // if(fileatt == ''){
    //     var error = true;
    //     $("#fileatt").addClass('border-danger');
    //     $("#fileatt").focus();
    //     return false;
    // }     
    // else
    //     $("#fileatt").removeClass('border-danger');

    
    var txtPhone = $("#txtPhone").val();

    if(txtPhone == ''){

           

        var error = true;

        $("#txtPhone").addClass('border-danger');

        $("#txtPhone").focus();

        return false;

     

     } else if (isNaN(txtPhone)) {

        $("#txtPhone").addClass('border-danger');

        $("#txtPhone").focus();

        hasError = true;

        return false;

    }     

     else

        $("#txtPhone").removeClass('border-danger');
    
    var txtMessage = $("#txtMessage").val();

    if(txtMessage.length == 0){

           

        var error = true;

        $("#txtMessage").addClass('border-danger');

        $("#txtMessage").focus();

        return false;

     }    

     else

        $("#txtMessage").removeClass('border-danger');

    

    //return false;        

}

</script>