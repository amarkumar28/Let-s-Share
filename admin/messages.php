<?php include 'inc/header.php'; ?>
<div class="container-fluid">
	<div class="row mt-3">
		<div class="col-md-6">
			<form action="" class="form-row">
				<div class="col">
					<input type="text" name="s" class="form-control" placeholder="Enter to search">
				</div>
				<div class="col">
					<button class="btn main-bg"><i class="fa fa-search"></i> Seach</button>
				</div>
			</form>
		</div>
	</div>
	<ol class="breadcrumb mt-3">
		<li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
		<li class="breadcrumb-item active">List of Messages</li>
	</ol>
	<table class="table table-bordered table-sm mt-3">
		<thead>
			<tr>
				<th>#</th>
				<th>Sender</th>
				<th>Phone</th>
				<th>E-Mail</th>
				<th>Messages</th>
			</tr>
		</thead>
		<tbody>
			<?php $data = fetch_data('messages') ?>
			<?php if ($data): ?>
				<?php $sn = 1; ?>
				<?php foreach ($data as $row): ?>
					<tr>
						<td><?= $sn; ?></td>
						<td><?= $row['fname']; ?></td>
						<td><?= $row['phone']; ?></td>
						<td><?= $row['email']; ?></td>
						<td><?= $row['message']; ?></td>
					</tr>
					<?php $sn += 1; ?>
				<?php endforeach ?>
			<?php endif ?>
		</tbody>
	</table>
</div>
<?php include 'inc/footer.php'; ?>