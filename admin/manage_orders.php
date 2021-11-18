<?php include 'inc/header.php'; ?>
<div class="container-fluid">
	<ol class="breadcrumb mt-3">
		<li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
		<li class="breadcrumb-item active">Manage Orders</li>
	</ol>
	<table class="table table-bordered table-sm mt-3">
		<thead>
			<tr>
				<th>#</th>
				<th>Customer Name</th>
				<th>Phone Number</th>
				<th>Shipping Address</th>
				<th class="text-center">Order Number</th>
				<th class="text-center">Status</th>
				<th class="text-center">Date</th>
				<th class="text-center">Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php $users = fetch_data('orders'); ?>
			<?php if ($users): ?>
				<?php $sn = 1; ?>
				<?php foreach ($users as $row): ?>
					<?php $cust = fetch_row('customers', 'id', $row['cust_id']); ?>
					<tr>
						<td><?php echo $sn; ?></td>
						<td><?php echo $cust['fname']." ".$cust['lname']; ?></td>
						<td><?php echo $row['phone_number']; ?></td>
						<td><?php echo $row['shipping_address']; ?></td>
						<td class="text-center"><?= sprintf("%05d",$row['id']) ?></td>
						<td class="text-center"><?= $row['status'] ?></td>
						<td class="text-center"><?= split_time($row['order_date']); ?></td>
						<td class="text-center">
							<a href="order_details.php?id=<?= $row['id'] ?>" class="btn btn-info btn-sm">
								<i class="fa fa-eye"></i> View
							</a>
						</td>
					</tr>
					<?php $sn += 1; ?>
				<?php endforeach ?>
			<?php endif ?>
		</tbody>
	</table>
</div>
<?php include 'inc/modals.php'; ?>
<?php include 'inc/footer.php'; ?>