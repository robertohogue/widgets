<?php include 'includes/config.php'?>
<?php
    //daily logic goes here
//$day = date('$l');

if(isset($_GET['day']))
    {
    $day = $_GET['day'];
    } else {
    $day = date('l');
}



switch($day)
        {
        case 'Sunday':
            $myDay = 'Sunday';
            $title = 'Sunday Specials';    
            $myWidget = 'Huge Widgets';
            $myWords = 'You have a huge project. You are gonna need a huge widget! This piano-sized widget is perfect for when you really just need to show how big a widget can be.';
            $myPrice = '<b>$50!</b> Regularly $120';
        break;
        case 'Monday':
            $myDay = 'Monday';
            $title = 'Monday Specials';    
            $myWidget = 'Teeny Widgets';
            $myWords = 'This specialty widget is a must-have when you are dealing with precision instruments. Buy 50 of them and stuff them into everywhere.';
            $myPrice = '<b>$2!</b> (Regularly $6)';
        break;
        case 'Tuesday':
            $myDay = 'Tuesday';
            $title = 'Tuesday Specials';    
            $myWidget = 'Bland Widgets';
            $myWords = 'Some projects can be pretty boring. Increase the blandness of your project with our bland widgets. You will be slightly more than underwhelmed.';
            $myPrice = '<b>$12!</b> (Regularly $20)';
        break;
        case 'Wednesday':
            $myDay = 'Wednesday';
            $title = 'Wednesday Specials';    
            $myWidget = 'Wet Widgets';
            $myWords = 'Wet widgets go anywhere where moisture and mold is an issue. These waterproof widgets are the best thing for marine projects.';
            $myPrice = '<b>$45!</b> (Regularly $100)';
        break;
        case 'Thursday':
            $myDay = 'Thursday';
            $title = 'Thursday Specials';    
            $myWidget = 'Invisible Widgets';
            $myWords = 'Sometimes you do not want your widget out in the open for everyone to see. Get this widget if you need something uderstated that still works like a charm.';
            $myPrice = '<b>$850!</b> (Regularly $1180)';
        break;
        case 'Friday':
            $myDay = 'Friday';
            $title = 'Friday Specials';    
            $myWidget = 'Meat Widgets';
            $myWords = 'The technology that they said could never happen... and it is here! Widgetize your meat with these amazing widgets. Meat will never be the same again.';
            $myPrice = '<b>$18!</b> (Regularly $65)';
        break;
        case 'Saturday':
            $myDay = 'Saturday';
            $title = 'Saturday Specials';    
            $myWidget = 'Normal Widgets';
            $myWords = 'These perfect all-purpose widgets go into just about anything you can set to your imagination. Our normal widgets are the most normal ever made.';
            $myPrice = '<b>$22!</b> (Regularly $43)';
       break;
        }
?>    
<?php include 'includes/header.php'?>
  <h2>
    Daily Widget Sale!
  </h2>
<p>Each day we put one of our favorite widgets on sale. Today could be your lucky day!</p>
<h4>Holy Smokes it's <?=$myDay?>!</h4>
<h2>Today's featured widgets are: </h2>
<center><div class="form-group col-lg-6">
<h2><u><?=$myWidget?></u></h2>
<p><?=$myWords?></p>
<h3><?=$myPrice?></h3>
</div></center>
<h3><i>Wanna know the upcoming sales?</i></h3>
<p>Click the button below to see what else is on sale at WidgetCo.</p>

<p><a href="daily.php?day=Monday">Monday</a></p>
<p><a href="daily.php?day=Tuesday">Tuesday</a></p>
<p><a href="daily.php?day=Wednesday">Wednesday</a></p>
<p><a href="daily.php?day=Thursday">Thursday</a></p>
<p><a href="daily.php?day=Friday">Friday</a></p>
<p><a href="daily.php?day=Saturday">Saturday</a></p>
<p><a href="daily.php?day=Sunday">Sunday</a></p>

<!-- ?php 
    
if(isset($_POST['Submit'])){
    echo include 'includes/allsales.php';
    
} else {
    echo '<div class="form-group col-lg-12">
     <form method="post" >
     <button type="submit" class="btn btn-secondary name="Submit">Upcoming Sales</button>
     </form>
    </div>
    ';     

//     
}    
?> -->

<?php include 'includes/footer.php'?>