<div id="guts">
	
<form id="box_register" action="templates/box_register.php" method="POST">
	<h3>Signup for new subscription:</h3>
	Email:<br>
	<input type="email" id="email" name="email" required><br>
	Password:<br>
	<input type="password" id="password" name="password" required/><br><br>
	
	Starting Month (First box will be sent at the start of the month):<br>
	<select name="startmonth">
		<option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
	</select><br>
	Starting Year:<br>
	<select name="startyear">
		<option value="2017">2017</option>
		<option value="2018">2018</option>
		<option value="2019">2019</option>
		<option value="2020">2020</option>
		<option value="2021">2021</option>
	</select><br>
	Subscription Length:<br>
	<select name="sub_length">
		<option value="1">1 month or less</option>
		<option value="2">2 months</option>
		<option value="3">3 months</option>
		<option value="4">4 months</option>
		<option value="5">5 months</option>
		<option value="6">6 months</option>
		<option value="7">7 months</option>
		<option value="8">8 months</option>
		<option value="9">9 months</option>
		<option value="10">10 months</option>
		<option value="11">11 months</option>
		<option value="12">12 months</option>
	</select><br>
	Box Frequency:<br>
	<select name="box_freq">
		<option value="bi-weekly">Bi-weekly</option>
		<option value="monthly">Monthly</option>
		<option value="bi-monthly">Bi-monthly</option>
	</select><br>
	
	<input type="submit" name="submit" value="Submit Subscription" required/>
</form>

</div>
