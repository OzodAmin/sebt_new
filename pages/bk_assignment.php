<?php 
require_once '../header.php';
require_once '../sidebar.php';
?>
<div class="container">
	<!--begin::Card-->
	<div class="card card-custom">
		<!--begin::Header-->
		<div class="card-header flex-wrap border-0 pt-6 pb-0">
			<div class="card-title">
				<h3 class="card-label">Договор поручениe</h3>
			</div>
		</div>
		<!--end::Header-->
		<!--begin::Body-->
		<div class="card-body">
<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th scope="col">№</th>
				<th scope="col">Клиент</th>
				<th scope="col">Срок</th>
				<th scope="col">Статус</th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>OOO "Some company"</td>
				<td>12.12.2021</td>
				<td><span class="label label-success label-inline font-weight-bolder ">Новый</span></td>
				<td>
					<a href="/sebt/pages/offer_new.php" class="btn btn-warning"><i class="fas fa-file-upload"></i></a>
				</td>
			</tr>
			<tr>
				<th scope="row">1</th>
				<td>MCHJ "Hello Body"</td>
				<td>12.12.2021</td>
				<td><span class="label label-danger label-inline font-weight-bolder ">Исползован</span></td>
				<td></td>
			</tr>
		</tbody>
	</table>
</div>

		</div>
		<!--end::Body-->
	</div>
	<!--end::Card-->
</div>

<?php require_once '../footer.php'; ?>