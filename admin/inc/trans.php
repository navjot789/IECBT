
<div class="table-responsive" style="margin-top:10px;border: none;">
	<table id="sales" class="table table-striped table-bordered" style="width:100%">
		<thead>
			<tr>
				<th>TID</th>
				<th>Payment ID</th>
				<th>Order ID</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Date</th>

			</tr>
		</thead>
		<tbody>
			
			<?php

			$sql="SELECT * from transaction";

			$dquery=$dbc->query($sql);


			while($drow=$dquery->fetch_array())
			{


				?>
				<tr>

					<td><?php echo $drow['tid']?></td>
					<td><?php echo $drow['pay_id']?></td>
					<td><?php echo $drow['o_id']?></td>
					<td><?php echo $drow['email']?></td>
					<td><?php echo $drow['phone']?></td>
					<td><?php echo $drow['cdate']?></td>



				</tr>
				<?php



			}
			?>
		</tbody>
		<tfoot>
			<tr>
				<th>TID</th>
				<th>Payment ID</th>
				<th>Order ID</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Date</th>

			</tr>
		</tfoot>
	</table>
</div>


