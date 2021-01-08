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
				<div class="col-8">
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
								</tbody>
							</table>				
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card card-custom mb-3">
						<div class="card-body">
							<ul class="navi navi-hover">
							    <li class="navi-item">
							        <a class="navi-link" href="#">
							            <span class="navi-icon"><i class="fas fa-caret-right text-success"></i></span>
							            <span class="navi-text">просмотр биржевого контракта</span>
							        </a>
							    </li>
							    <li class="navi-item">
							        <a class="navi-link" href="#">
							            <span class="navi-icon"><i class="fas fa-caret-right text-success"></i></span>
							            <span class="navi-text">регистрация дополнительных соглашений</span>
							        </a>
							    </li>
							    <li class="navi-item">
							        <a class="navi-link" href="#">
							            <span class="navi-icon"><i class="fas fa-caret-right text-success"></i></span>
							            <span class="navi-text">дробление начислений биржевого сбора</span>
							        </a>
							    </li>
							    <li class="navi-item">
							        <a class="navi-link" href="#">
							            <span class="navi-icon"><i class="fas fa-caret-right text-success"></i></span>
							            <span class="navi-text">аннулирование биржевого контракта</span>
							        </a>
							    </li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="card card-custom card-stretch card-stretch-half">
				<div class="card-header">
					<h3 class="card-title">Начисления по контракту</h3>
					<div class="card-toolbar">
						<button type="button" data-toggle="modal" data-target="#childList" class="btn btn-outline-info btn-xs"><i class="ki ki-plus icon-xs"></i>выписать счет</button>
					</div>
				</div>
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th>№</th>
								<th>Вид начисления</th>
								<th>Кому</th>
								<th nowrap>К оплате</th>
								<th>Оплачено</th>
								<th>%</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>1</th>
								<td>Биржевой сбор с продавца</td>
								<td>Paxtakor Sifat Yog MCHJ <br><span class="text-danger">Продавец</span></td>
								<td>52 500,00<br><span class="text-danger">Сч.№ 128</span></td>
								<td>52 500,00</td>
								<td>100%</td>
								<td><span class="label label-success label-inline font-weight-bolder ">Оплачен</span></td>
							</tr>
							<tr>
								<th>2</th>
								<td>Биржевой сбор с покупатель</td>
								<td>"QAYIRMA AGRO LYUKS" fermer xo`jaligi<br><span class="text-danger">Покупатель</span></td>
								<td>52 500,00<br><span class="text-danger">Сч.№ 129</span></td>
								<td>26 500,00</td>
								<td>50%</td>
								<td><span class="label label-info label-inline font-weight-bolder ">В процесе</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="childList" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Ввод нового счета на оплату</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i aria-hidden="true" class="ki ki-close"></i>
				</button>
			</div>
			<div class="modal-body">
				<div class="form-group row">
			        <label  class="col-3 col-form-label bg-warning">Плательщик:</label>
					<div class="col-9">
						<select class="form-control">
							<option> - выберите - </option>
							<option>MChJ "YOG`-MOY SAVDO" (продавец)</option>
							<option>OOO "PRESTIJ RILT" (покупатель)</option>
						</select>
					</div>
				</div>
			    <div class="form-group row">
			        <label class="col-sm-3 col-form-label bg-warning">Выбор счета:</label>
			        <div class="col-sm-9">
			        	<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" checked>
							<label class="form-check-label">АКБ InFinBank, р/с: 20208000400178912001</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio">
							<label class="form-check-label">АКБ InFinBank, р/с: 20208000200178912027</label>
						</div>
			        </div>
			    </div>
			    <div class="form-group row">
			        <label class="col-sm-3 col-form-label bg-warning">Оплата за:</label>
			        <div class="col-sm-9">
			        	<select class="form-control">
							<option> - выберите - </option>
							<option>Товары</option>
							<option>Биржевой сбор РКП</option>
							<option>Биржевой сбор</option>
							<option>Штраф</option>
							<option>Прочее</option>
						</select>
			        </div>
			    </div>
			    <div class="form-group row">
			        <label class="col-sm-3 col-form-label bg-warning">Срок оплаты:</label>
			        <div class="col-sm-9">
			        	<div class="input-group">
							<input type="text" class="form-control" value="5" />
							<div class="input-group-append"><span class="input-group-text">дней</span></div>
						</div>
			        	<span class="form-text text-muted">Автоматом берется с контракта</span>
			        </div>
			    </div>

				
				<center>
					<button type="button" class="btn btn-secondary text-center" data-dismiss="modal">Закрыть</button>
					<a href="/sebt/pages/bill_view.php" class="btn btn-primary text-center">сохранить счет</a>
				</center>
			</div>
		</div>
	</div>
</div>
<?php require_once '../footer.php'; ?>