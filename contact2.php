<?php include 'includes/config.php'?>
<?php include 'includes/header.php'?>
<h2>Contact Us</h2>
<?php

if(isset($_POST['Submit']))
{//send email?

    $to= "roberto.hogue@gmail.com";
    $subject = "My WebSite Feedback " . date("m/d/y, G:i:s");
    
    //collect and clean post data
    $FirstName = coffee_clean_post('FirstName');
    $LastName = coffee_clean_post('LastName');
    $Email = coffee_clean_post('Email');
    $Comment = coffee_clean_post('Comment');
    $text = '';//initialize variable
    $text .= 'First Name: ' . $FirstName . PHP_EOL . PHP_EOL;
    $text .= 'Last Name: ' . $LastName . PHP_EOL . PHP_EOL;
    $text .= 'Email: ' . $Email . PHP_EOL . PHP_EOL;
    
    $text .= 'Gender:' . $Gender . PHP_EOL . PHP_EOL;
 
    $male_status = 'unchecked';
    $female_status = 'unchecked';

        if (isset($_POST['Submit'])) {
            $selected_radio = $_POST['Gender'];
            if ($selected_radio == 'Male') {
            $male_status = 'checked';
            } else if ($selected_radio == 'Female') {
            $female_status = 'checked';
            }

        }
    
    $text .= 'Access:' . $Access . PHP_EOL . PHP_EOL;
 
    $wheelchair_status = 'unchecked';
    $camel_status = 'unchecked';
    $skateboard_status = 'unchecked';

        if (isset($_POST['Submit'])) {
            $selected_check = $_POST['Access'];
            if ($selected_check == 'Wheelchair') {
            $wheelchair_status = 'checked';
            } else if ($selected_check == 'Camel') {
            $camel_status = 'checked';
            } else if ($selected_check == 'Skateboard') {
            $skateboard_status = 'checked';    
            }

        }
    
    $text .= 'Comment:' . $Comment . PHP_EOL . PHP_EOL;
    
    $headers = 'From: lolfu@lolfu.org' . PHP_EOL .
    'Reply-To: ' . $Email . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();
    
    mail($to,$subject,$comment,$headers,$gender,$access);
    
    echo '<div class="row">
    <div class="col-lg-12">
    <h3>Message Sent</h3>
    <p>We will contact you soon.</p>
    </div>
    ';

} else {//show form!
    echo '
    <form action="" method="post">
    
    <div class="row">
        <div class="form-group col-lg-4">
            <label class="text-heading" for="FirstName">First Name</label>
            <input class="form-control" type="text" name="FirstName" id="FirstName" autofocus required />
        </div>
           
        <div class="form-group col-lg-4">
            <label class="text-heading" for="LastName">Last Name</label>
            <input class="form-control" type="text" name="LastName" id="LastName" required />
        </div>
        
        <div class="form-group col-lg-4">
            <label class="text-heading" for="Email">Email</label>
            <input class="form-control" type="email" name="Email" id="Email" required />
        </div> 
        
        
        <div class="clearfix"></div>
        
        <div class="form-group col-lg-4">
            <label class="text-heading" for="Gender">Gender</label><br />
            
            Female<input class="form-control" type="radio" name="Gender" id="Female" 
            <?PHP echo $female_status; ?>
            Male<input class="form-control" type="radio" name="Gender" id="Male" 
            <?PHP echo $male_status; ?>
            

        </div>
        
        <div class="form-group col-lg-4">
            <label class="text-heading" for="Access">Do you need special access?</label><br />
            
            Wheelchair<input class="form-control" type="checkbox" name="Access[Wheelchair]" 
            value="Yes"
            <?PHP echo $wheelchair_status; ?>
            Camel<input class="form-control" type="checkbox" name="Access[Camel]"
            value="Yes"
            <?PHP echo $Camel_status; ?>
            Skateboard<input class="form-control" type="checkbox" name="Access[id="Skateboard]" 
            value="Yes"
            <?PHP echo $Skateboard_status; ?>
            
            
            </div>
        
        <div class="clearfix"></div>
        
        <div class="form-group col-lg-12">
            <label class="text-heading" for="Comments">Comments</label>
            <textarea class="form-control" name="Comments" id="Comments" required /></textarea>
        </div>
        
        <div class="form-group col-lg-12">
            <button type="submit" class="btn btn-secondary name="Submit">Submit</button>
            
        </div>

    </div>

    </form>
    ';
}
?>
<?php include 'includes/footer.php';

    function coffee_clean_post($key){
        if(isset($_POST[$key])){
            return strip_tags(trim($_POST[$key]));
        }else{
            return'';
            
        }
    } 

?>