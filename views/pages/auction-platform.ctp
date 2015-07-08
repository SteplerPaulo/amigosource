<div class="container">
	<b>
	<div>Project Name:</div>
	<div>Project Description: </div>
	<div>Business Type</div>
	<div>Proponent:</div>
	<div class="row">
		<div class="col-lg-4">Date:</div>
		<div class="col-lg-4">Start Time:</div>
		<div class="col-lg-4">End Time:</div>
	</div>
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4">Start In:</div>
		<div class="col-lg-4 alert-info">Extension Time:</div>
	</div>
	</b>
	<br/>
	<center class="row ">
		<h3>Time Remaining:</h3> 
		
		<ul class="countdown">
			<li> <span class="days">00</span>
				<p class="days_ref">days</p>
			</li>
			<li> <span class="hours">00</span>
				<p class="hours_ref">hours</p>
			</li>
			<li> <span class="minutes">00</span>
				<p class="minutes_ref">minutes</p>
			</li>
			<li> <span class="seconds">00</span>
				<p class="seconds_ref">seconds</p>
			</li>
		</ul>

	</center>
	<div class="row">
		<div class="col-lg-4">
			<table class="table table-bordered table-condensed">
				<caption>PARTICIPANT</caption>
				<thead>
					<th>No</th>
					<th>Alias</th>
					<th>Log In</th>
					<th>Log Out</th>
				</thead>
				</tbody>
					<tr>
						<td>1</td>
						<td>Pau</td>
						<td>4:20:09</td>
						<td></td>
					</tr>
					<tr>
						<td>2</td>
						<td>Garry</td>
						<td>4:20:09</td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-lg-4 ">
			<table class="table table-condensed ">
				<caption>CURRENT BID</caption>
				<thead>
					<th colspan="2">Amount</th>
					<th>By</th>
				</thead>
				</tbody>
					<tr>
						<td><input value="50.00"></input></td>
						<td>Pau</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-lg-4">
			<table class="table table-bordered table-condensed">
				<caption>BIDS HISTORY</caption>
				<thead>
					<th>Time</th>
					<th>By</th>
					<th>Amount</th>
				</thead>
				</tbody>
					<tr>
						<td>4:30:31</td>
						<td>Garry</td>
						<td>50.00</td>
					</tr>
					<tr>
						<td>4:30:32</td>
						<td>Pau</td>
						<td>49.50</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php echo $this->Html->script('biz/auction-platfform',array('inline'=>false));?>