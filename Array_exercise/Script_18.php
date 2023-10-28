
<!-- Remove a city of your choice from the array and display the updated list. -->

<?php  

    $cities = ["Ahmedabad", "Vadodara", "Surat", "Morbi"];

    print_r($cities);
    echo "<br><br>";


    // remove item at index 1 in array 

     array_splice($cities, 2 , 1);  
    
     echo " After remove a city  and display : ";


    print_r($cities);
    
?> 