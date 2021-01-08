<?php 
require_once "../lang/ru.php";
require_once '../header.php';
require_once '../sidebar.php';
?>
	<div class="card card-custom">
		<!--begin::Header-->
		<div class="card-header flex-wrap border-0 pt-6 pb-0">
			<div class="card-title">
				<h3 class="card-label">СПРАВОЧНИК ТАРИФОВ БИРЖИ</h3>
			</div>
			<div class="card-toolbar">
				<button type="button" data-toggle="modal" data-target="#newUserModal" class="btn btn-primary font-weight-bolder">
					<i class="fas fa-plus"></i>НОВЫЙ Тариф
				</button>
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
				<th scope="col">Наименование</th>
				<th scope="col">Сумма сделки от, сум</th>
				<th scope="col">Сумма сделки до, сум</th>
				<th scope="col">% для каждой стороны</th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>
					<a type="button" data-toggle="modal" data-target="#exampleModal">
						Комбикорма
					</a>
				</td>
				<td>0,00</td>
				<td>и выше</td>
				<td>0.175 %</td>
				<td>
					<button type="button" data-toggle="modal" data-target="#newUserModal" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></button>
					<button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-info"><i class="fas fa-list"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td>
					<a type="button" data-toggle="modal" data-target="#exampleModal">
						Минеральные удобрения
					</a>
				</td>
				<td>0,00</td>
				<td>и выше</td>
				<td>0.115 %</td>
				<td>
					<button type="button" data-toggle="modal" data-target="#newUserModal" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></button>
					<button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-info"><i class="fas fa-list"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td>
					<a type="button" data-toggle="modal" data-target="#exampleModal">
						Экспортно-импортные, внутренние контракты с НДС
					</a>
				</td>
				<td>0,00</td>
				<td>50 000 000,00</td>
				<td>0.23 %</td>
				<td>
					<button type="button" data-toggle="modal" data-target="#newUserModal" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></button>
					<button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-info"><i class="fas fa-list"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">4</th>
				<td>
					<a type="button" data-toggle="modal" data-target="#exampleModal">
						Экспортно-импортные, внутренние контракты с НДС
					</a>
				</td>
				<td>50 000 000,00</td>
				<td>500 000 000,00</td>
				<td>0.175 %</td>
				<td>
					<button type="button" data-toggle="modal" data-target="#newUserModal" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></button>
					<button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-info"><i class="fas fa-list"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">5</th>
				<td>
					<a type="button" data-toggle="modal" data-target="#exampleModal">
						Экспортно-импортные, внутренние контракты с НДС
					</a>
				</td>
				<td>500 000 000,00</td>
				<td>и выше</td>
				<td>0.115 %</td>
				<td>
					<button type="button" data-toggle="modal" data-target="#newUserModal" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></button>
					<button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-info"><i class="fas fa-list"></i></button>
				</td>
			</tr>
		</tbody>
	</table>
</div>
<div class="modal" id="newUserModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">НОВЫЙ тариф</h5>
			</div>
			<div class="modal-body">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">Тарифы филиала</th>
								<th scope="col">Сумма сделки от</th>
								<th scope="col">Сумма сделки до</th>
								<th scope="col">% для каждой стороны</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">AJ "Respublika ko'p tarmoqli agrosanoat birjasi"</th>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">сум</span>
										</div>
									</div>
								</td>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">сум</span>
										</div>
									</div>
								</td>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">%</span>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">АНДИЖАН</th>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">сум</span>
										</div>
									</div>
								</td>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">сум</span>
										</div>
									</div>
								</td>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">%</span>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">БУХАРА</th>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">сум</span>
										</div>
									</div>
								</td>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">сум</span>
										</div>
									</div>
								</td>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">%</span>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">КАРАКАЛПАКСТАН</th>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">сум</span>
										</div>
									</div>
								</td>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">сум</span>
										</div>
									</div>
								</td>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">%</span>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">КАШКАДАРЬЯ</th>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">сум</span>
										</div>
									</div>
								</td>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">сум</span>
										</div>
									</div>
								</td>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">%</span>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">НАВОИ</th>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">сум</span>
										</div>
									</div>
								</td>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">сум</span>
										</div>
									</div>
								</td>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">%</span>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">НАМАНГАН</th>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">сум</span>
										</div>
									</div>
								</td>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">сум</span>
										</div>
									</div>
								</td>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">%</span>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">САМАРКАНД</th>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">сум</span>
										</div>
									</div>
								</td>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">сум</span>
										</div>
									</div>
								</td>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">%</span>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">СУРХАНДАРЬЯ</th>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">сум</span>
										</div>
									</div>
								</td>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">сум</span>
										</div>
									</div>
								</td>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">%</span>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">ФЕРГАНА</th>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">сум</span>
										</div>
									</div>
								</td>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">сум</span>
										</div>
									</div>
								</td>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">%</span>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">ХОРЕЗМ</th>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">сум</span>
										</div>
									</div>
								</td>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">сум</span>
										</div>
									</div>
								</td>
								<td>
									<div class="input-group">
										<input type="text" class="form-control">
										<div class="input-group-prepend">
											<span class="input-group-text">%</span>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
				<button type="button" class="btn btn-primary">Сохранить</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-body">
      	<h3>Комбикорма</h3>
      	<div class="table-responsive">
			<table class="table table-hover">
				<tbody>
					<tr>
						<th scope="row">AJ "Respublika ko'p tarmoqli agrosanoat birjasi"</th>
						<td>0,00</td>
						<td>и выше</td>
						<td>0.115 %</td>
					</tr>
					<tr>
						<th scope="row">АНДИЖАН</th>
						<td>0,00</td>
						<td>и выше</td>
						<td>0.115 %</td>
					</tr>
					<tr>
						<th scope="row">БУХАРА</th>
						<td>0,00</td>
						<td>и выше</td>
						<td>0.115 %</td>
					</tr>
					<tr>
						<th scope="row">КАРАКАЛПАКСТАН</th>
						<td>0,00</td>
						<td>и выше</td>
						<td>0.115 %</td>
					</tr>
					<tr>
						<th scope="row">КАШКАДАРЬЯ</th>
						<td>0,00</td>
						<td>и выше</td>
						<td>0.115 %</td>
					</tr>
					<tr>
						<th scope="row">НАВОИ</th>
						<td>0,00</td>
						<td>и выше</td>
						<td>0.115 %</td>
					</tr>
					<tr>
						<th scope="row">НАМАНГАН</th>
						<td>0,00</td>
						<td>и выше</td>
						<td>0.115 %</td>
					</tr>
					<tr>
						<th scope="row">САМАРКАНД</th>
						<td>0,00</td>
						<td>и выше</td>
						<td>0.115 %</td>
					</tr>
					<tr>
						<th scope="row">СУРХАНДАРЬЯ</th>
						<td>0,00</td>
						<td>и выше</td>
						<td>0.115 %</td>
					</tr>
					<tr>
						<th scope="row">ФЕРГАНА</th>
						<td>0,00</td>
						<td>и выше</td>
						<td>0.115 %</td>
					</tr>
					<tr>
						<th scope="row">ХОРЕЗМ</th>
						<td>0,00</td>
						<td>и выше</td>
						<td>0.115 %</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
      </div>
    </div>
  </div>
</div>
		</div>
		<!--end::Body-->
	</div>

<?php 
	$script = '
	<script src="/sebt/assets/js/pages/custom/todo/todo.js"></script>
<script>
	$(".delete").click(function(e) {
		Swal.fire({
			title: "Удалить тариф?",
			text: "Вы не сможете отменить это!",
			icon: "warning",
			showCancelButton: true,
			confirmButtonText: "Да удалить!",
			cancelButtonText: "Отмена"
		}).then(function(result) {
			if (result.value) {
				Swal.fire(
					"Deleted!",
					"Your file has been deleted.",
					"success"
				)
			}
		});
	});
</script>	
';
	require_once '../footer.php'; 
?>