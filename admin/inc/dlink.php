
<div class="table-responsive" style="margin-top:10px;border: none;">
	<table id="sales" class="table table-striped table-bordered" style="width:100%">
		<thead>
			<tr>
				<th>did</th>
				<th>Product Code</th>
				<th>Download link</th>
				<th>Date</th>
				<th>Option</th>

			</tr>
		</thead>
		<tbody>
			
			<?php

			$sql="SELECT * from dlinks";
			$dquery=$dbc->query($sql);
			while($drow=$dquery->fetch_array())
			{


				?>
				<tr>



					<td><?php echo $drow['did']?></td>
					<td><?php echo $drow['p_code']?></td>
					<td><a href="<?php echo $drow['d_link']?>" target="_blank"><?php echo $drow['d_link']?></a></td>
					<td><?php echo $drow['cdate']?></td>
					<td>
					
							<form action="inc/curd/delete_link.php" method="post">
							    <input name="del_link" type="hidden" value="<?php echo $drow['did']; ?>">
								<button  class="btn btn-danger btn-sm" onclick="return confirm('Are u sure?')">
								<i class="fas fa-trash-alt" ></i>
								</button>
							</form>
						
					</td>



				</tr>
				<?php



			}
			?>
		</tbody>
		<tfoot>
			<tr>
				<th>did</th>
				<th>Product Code</th>
				<th>Download link</th>
				<th>Date</th>
				<th>Option</th>

			</tr>
		</tfoot>
	</table>
</div>


