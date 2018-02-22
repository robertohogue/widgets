<?php
//customer_list.php - shows a list of customer data
?>
<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>
<h1>Customer List</h1>
<?php
$sql = "select * from dumb_deaths";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
        echo '<p>';
        echo 'Dumb way to die: <b>' . $row['deathCategory'] . '</b> &nbsp';
        echo 'Reason for death: <b>' . $row['deathReason'] . '</b> <br />';
        echo 'Who should we blame: <b>' . $row['deathBlame'] . '</b> &nbsp';
        
        echo '<a href="dumbdeaths_view.php?id=' . $row['dumbDeathID'] . '">' . $row['deathCategory'] . '</a>';
        
        echo '</p>';
    }    

}else{//inform there are no records
    echo '<p>Any way you die is pretty dumb</p>';
}

//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>
<?php include 'includes/footer.php';?>