
 <?php
        include "Functions/header.php";
        
 ?>

<table class="table table-striped">
    
    <?php 
    
        $getT = fetch_all("select * from tickets");
        
        foreach($getT as $getT){
            
            echo "<tr><td>" .$getT['EventID'] ."</td><td><form  action='../'> </form></td></tr>";
        }
        
    
    ?>
    
</table>

 <?php
        include "Functions/footer.php";
 ?>
