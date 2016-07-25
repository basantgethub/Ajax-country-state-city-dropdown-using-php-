<?php
if(isset($_POST["state"])){
    // Capture selected country
    $state = $_POST["state"];
     
    // Define country and city array
    $stateArr = array(
					"London" => array("select city","Bressenden Pl", "Vauxhall Bridge Rd","Cockspur St"),
					"Liverpool" => array("select city","Royal Quay", "Canada Blvd"),
                    "New Yourk" => array("select city","New1ASA", "seg", "hsrh"),
                    "Los Angeles" => array("select city","vg", "aegg", "Bangalore"),
                    "California" => array("select city","London", "Manchester", "Liverpool"),
					"New Delhi" => array("select city","janakpuri", "uttam nager"),
					"Mumbai" => array("select city","thane", "navi mumbai", "jai hind"),
                );
     
    // Display city dropdown based on country name
    if($state !== 'Select'){
        echo "<label>state:</label>";
        echo "<select>";
        foreach($stateArr[$state] as $value){
            echo "<option>". $value . "</option>";
        }
        echo "</select>";
    } 
}
?>