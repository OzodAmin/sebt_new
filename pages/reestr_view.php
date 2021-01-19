<?php 
require_once "../lang/ru.php";
require_once '../header.php';
require_once '../sidebar.php';
?>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="card card-custom mb-3">
						<div class="card-header">
							<h3 class="card-title">Просмотр биржевого контракта</h3>
							<div class="card-toolbar">
								<a href="/sebt/pages/ticket_list.php" class="btn btn-light-primary font-weight-bolder mr-2"><i class="ki ki-long-arrow-back icon-xs"></i>Вернуться в список</a>
							</div>
						</div>
						<div class="card-body">
							<table class="table">
								<tbody>
									<tr>
										<td class="table-primary">Контракт</td>
										<td>№ 359/3 от 12.03.2020 г.</td>
										<td class="table-primary">Статус</td>
										<td>на бирже</td>
									</tr>
									<tr>
										<td class="table-primary">Место регистрации</td>
										<td>AJ "Respublika ko'p tarmoqli agrosanoat birjasi"</td>
										<td class="table-primary">Тип торгов</td>
										<td>Биржевые торги</td>
									</tr>
									<tr>
										<td class="table-primary">№ протокола торгов</td>
										<td>12</td>
										<td class="table-primary">Дата торгов</td>
										<td>17.01.2020 г.</td>
									</tr>
									<tr>
										<td class="table-primary">Вид сделок</td>
										<td>Спот</td>
										<td class="table-primary">Тип сделок</td>
										<td>Внутренний</td>
									</tr>
									<tr>
										<td class="table-primary">БК продавца</td>
										<td>214 - MChJ "YOG`-MOY SAVDO"</td>
										<td class="table-primary">БК покупателя</td>
										<td>471 - XK "SAIDMUROD INVEST"</td>
									</tr>
									<tr>
										<td class="table-primary">Трейдер-продавец</td>
										<td>Исмаилов Азиз Яхъяевич</td>
										<td class="table-primary">Трейдер-покупатель</td>
										<td>Kabulov Saidmurod Ergashovich</td>
									</tr>
									<tr>
										<td class="table-primary">Сумма</td>
										<td colspan="3">17 500 000,00 сум</td>
									</tr>
									<tr>
										<td class="table-primary">Товар</td>
										<td colspan="3">Шрот хлопковый</td>
									</tr>
									<tr>
										<td class="table-primary">Внешняя ссылка</td>
										<td colspan="3">https://agrobirja.uz/sebt/public/contract.php?contract=a8aece0882371f438c829bccb995a927</td>
									</tr>
									<tr>
										<th colspan="4">Стороны биржевого контракта</th>
									</tr>
									<tr>
										<td class="table-primary">Продавец</td>
										<td>Paxtakor Sifat Yog MCHJ</td>
										<td class="table-primary">Покупатель</td>
										<td>"QAYIRMA AGRO LYUKS" fermer xo`jaligi</td>
									</tr>
									<tr>
										<td class="table-primary">Биржевой сбор</td>
										<td>52 500,00 сум (0.3%)</td>
										<td class="table-primary">Биржевой сбор</td>
										<td>0,00</td>
									</tr>
									<tr>
										<td class="table-primary">Статус</td>
										<td><span class="label label-warning label-inline font-weight-bolder ">действующий</span></td>
										<td class="table-primary">Статус</td>
										<td><span class="label label-success label-inline font-weight-bolder ">закрытый</span></td>
									</tr>
								</tbody>
							</table>				
						</div>
					</div>
				</div>
			</div>

			<div class="card card-custom card-stretch card-stretch-half">
				<div class="card-header">
					<h3 class="card-title">Начисления по контракту</h3>
					<div class="card-toolbar">
						<button type="button" class="btn btn-outline-info btn-xs" id="vivod">Вывод средств</button>
					</div>
				</div>
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th>№</th>
								<th>Дата</th>
								<th>Оплачено</th>
								<th>%</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>1</th>
								<td>12.12.2020</td>
								<td>52 500,00</td>
								<td>10%</td>
								<td></td>
							</tr>
							<tr>
								<th>1</th>
								<td>12.12.2020</td>
								<td>52 500,00</td>
								<td>10%</td>
								<td><input type="checkbox" class="form-check-input"></td>
							</tr>
							<tr>
								<th>1</th>
								<td>12.12.2020</td>
								<td>22 500,00</td>
								<td>5%</td>
								<td><input type="checkbox" class="form-check-input"></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
	$script = '
<script>
var btn = KTUtil.getById("vivod");

KTUtil.addEvent(btn, "click", function() {
   Swal.fire({
				text: "Вы действительно хотите вывести выбранные средства?",
				icon: "success",
				showCancelButton: true,
				buttonsStyling: false,
				confirmButtonText: "Да, вывести!",
				cancelButtonText: "Нет, отменить.",
				customClass: {
					confirmButton: "btn font-weight-bold btn-primary",
					cancelButton: "btn font-weight-bold btn-default"
				}
			}).then(function (result) {
				if (result.value) {
					Swal.fire({
						text: "Выделенные средства выведкны.",
						icon: "success",
						buttonsStyling: false,
						confirmButtonText: "Ok, got it!",
						customClass: {
							confirmButton: "btn font-weight-bold btn-primary",
						}
					});
				} else if (result.dismiss === "cancel") {
					Swal.fire({
						text: "Операция отменена",
						icon: "error",
						buttonsStyling: false,
						confirmButtonText: "Ok, got it!",
						customClass: {
							confirmButton: "btn font-weight-bold btn-primary",
						}
					});
				}
			});
});
</script>	
';
	require_once '../footer.php'; 
?>