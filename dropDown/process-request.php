
<script type="text/javascript">
$(document).ready(function(){
    $("select.state").change(function(){
        var selectedstate = $(".state option:selected").val();
	//alert(selectedstate);
        $.ajax({
            type: "POST",
            url: "process-state.php",
            data: { state : selectedstate } 
        }).done(function(data){
            $("#response1").html(data);
        });
    });
});
</script>
<?php
if(isset($_POST["country"])){
    // Capture selected country
    $country = $_POST["country"];
     
    // Define country and city array
    $countryArr = array(
                    "usa" => array("select state","New Yourk", "Los Angeles", "California"),
                    "india" => array("select state","Mumbai", "New Delhi", "Bangalore"),
                    "uk" => array("select state","London", "Liverpool")
                );
	  if($country !== 'Select'){
    
	?>
	<form>
    <table>
        <tr>
            <td>
	<label>City:</label>
		<select class="state">
		    <?php foreach($countryArr[$country] as $value){ ?>
            <option value="<?php print $value; ?>"><?php print $value; ?></option>
       <?php } ?>
		</select>
	</td>
            <td id="response1">
                <!--Response will be inserted here-->
            </td>
        </tr>
    </table>
</form>	
	<?php
	}
}
?>
