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
			<div class="d-flex flex-row">
				<div class="flex-row-fluid ml-lg-8">
					<div class="card card-custom card-stretch gutter-b">
						<!--begin::Card Body-->
						<div class="card-body">
							<h3 class="font-weight-bold font-size-h4 text-dark-75 mb-3">Хлопоковое волокно 1 сорт, олий, 4-тип урожай 2019 года</h3>
							<p class="text-center text-primary">Товар</p>
							<div class="d-flex mb-3">
								<span class="text-dark-50 flex-root font-weight-bold">№ заявки:</span>
								<span class="text-dark flex-root font-weight-bold">3420</span>
							</div>
							<div class="d-flex mb-3">
								<span class="text-dark-50 flex-root font-weight-bold">№ позиции:</span>
								<span class="text-dark flex-root font-weight-bold">123</span>
							</div>
							<div class="d-flex mb-3">
								<span class="text-dark-50 flex-root font-weight-bold">Группа товаров:</span>
								<span class="text-dark flex-root font-weight-bold">	Сельхозпродукция и продукция её переработки</span>
							</div>
							<div class="d-flex mb-3">
								<span class="text-dark-50 flex-root font-weight-bold">Вид сделки:</span>
								<span class="text-dark flex-root font-weight-bold">Спот</span>
							</div>
							<div class="d-flex mb-3">
								<span class="text-dark-50 flex-root font-weight-bold">Кол-во:</span>
								<span class="text-dark flex-root font-weight-bold">1 000 т</span>
							</div>
							<div class="d-flex mb-3">
								<span class="text-dark-50 flex-root font-weight-bold">Базовая цена:</span>
								<span class="text-dark flex-root font-weight-bold">50 000,00 сум</span>
							</div>
							<div class="d-flex mb-3">
								<span class="text-dark-50 flex-root font-weight-bold">Размер лота:</span>
								<span class="text-dark flex-root font-weight-bold">100 т</span>
							</div>
							<div class="d-flex mb-3">
								<span class="text-dark-50 flex-root font-weight-bold">Кол-во лотов:</span>
								<span class="text-dark flex-root font-weight-bold">10 лотов</span>
							</div>
							<p class="text-center text-primary">Ограничения покупки</p>
							<div class="d-flex mb-3">
								<span class="text-dark-50 flex-root font-weight-bold">Мин. цена:</span>
								<span class="text-dark flex-root font-weight-bold">-</span>
							</div>
							<div class="d-flex mb-3">
								<span class="text-dark-50 flex-root font-weight-bold">Макс. цена:</span>
								<span class="text-dark flex-root font-weight-bold">-</span>
							</div>

							<!-- 
							<hr>
							<p class="text-center text-primary">Указания к торгам</p>
							<div class="d-flex mb-3">
								<span class="text-dark-50 flex-root font-weight-bold">Клиент:</span>
								<span class="text-dark flex-root font-weight-bold">ООО "STEMENT BROK SAVDO", ИНП: 305834643</span>
							</div>
							<div class="d-flex mb-3">
								<span class="text-dark-50 flex-root font-weight-bold">Требуемое кол-во:</span>
								<span class="text-dark flex-root font-weight-bold">2 лотов</span>
							</div>
							<div class="d-flex mb-3">
								<span class="text-dark-50 flex-root font-weight-bold">Указание по цене:</span>
								<span class="text-dark flex-root font-weight-bold">-</span>
							</div>
							<div class="d-flex mb-3">
								<span class="text-dark-50 flex-root font-weight-bold">Указание по сумме:</span>
								<span class="text-dark flex-root font-weight-bold">-</span>
							</div> -->


							<!-- <div class="d-flex mb-3">
								<span class="text-dark-50 flex-root font-weight-bold"></span>
								<span class="text-dark flex-root font-weight-bold"></span>
							</div>
							<div class="d-flex mb-3">
								<span class="text-dark-50 flex-root font-weight-bold"></span>
								<span class="text-dark flex-root font-weight-bold"></span>
							</div>
							<div class="d-flex mb-3">
								<span class="text-dark-50 flex-root font-weight-bold"></span>
								<span class="text-dark flex-root font-weight-bold"></span>
							</div>
							<div class="d-flex mb-3">
								<span class="text-dark-50 flex-root font-weight-bold"></span>
								<span class="text-dark flex-root font-weight-bold"></span>
							</div>
							<div class="d-flex mb-3">
								<span class="text-dark-50 flex-root font-weight-bold"></span>
								<span class="text-dark flex-root font-weight-bold"></span>
							</div>
							<div class="d-flex mb-3">
								<span class="text-dark-50 flex-root font-weight-bold"></span>
								<span class="text-dark flex-root font-weight-bold"></span>
							</div> -->
						</div>
						<div class="card-footer">
							<p class="text-center text-warning"><b>Укажите свое предложение</b></p>
							<form>
								<div class="form-group row">
									<label class="col-sm-4 col-form-label bg-warning">Тип сделки:<span class="text-danger">*</span></label>
									<div class="col-sm-8">
										<select class="form-control">
											<option>(не выбрано)</option>
											<option>Внутренний</option>
											<option>Экспорт</option>
											<option>Импорт</option>
											<option>Транзит</option>
											<option>Экспорт без вывоза</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-4 col-form-label bg-warning">Клиент:<span class="text-danger">*</span></label>
									<div class="col-sm-8">
										<select class="form-control">
											<option>(не выбрано)</option>
											<option>AKUMSHIN SAVDO</option>
											<option>ООО "DAVRON BOBO"</option>
											<option>ООО "PLASTEKS"</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-8">
										<div class="row">
											<label class="col-sm-4 col-form-label bg-warning">Кол-во лотов:<span class="text-danger">*</span></label>
											<div class="col-sm-8">
												<select class="form-control">
													<option selected>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
													<option>6</option>
													<option>7</option>
													<option>8</option>
													<option>9</option>
													<option>10</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-sm-4"><span class="text-warning">Количество:</span> 100 т</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-8">
										<div class="row">
											<label class="col-sm-4 col-form-label bg-warning">Цена:<span class="text-danger">*</span></label>
											<div class="col-sm-8">
												<div class="input-group">
													<input type="text" class="form-control" value="50000">
													<div class="input-group-append">
														<span class="input-group-text">сум</span>
													</div>
												</div>
											</div>	
										</div>
									</div>
									<div class="col-sm-4"><span class="text-warning">Сумма:</span> 5 000 000 сум</div>
								</div>
								<center><button class="btn btn-primary btn-block">купить</button></center>
							</form>
						</div>
					</div>
				</div>
				<div class="flex-column w-400px w-xl-425px">
					<div class="card card-custom gutter-b">
						<div class="card-body">
							<h3 class="font-weight-bold font-size-h4 text-dark-75 mb-3">Список предложений</h3>
							<table class="table table-borderless mb-0">
								<thead>
									<tr class="table-primary">
										<th>Время</th>
										<th>Кол-во</th>
										<th>Цена</th>
									</tr>
								</thead>
								<tbody>
									<tr class="table-success">
										<td>15:07:29.9</td>
										<td>124</td>
										<td>1 931 990,00</td>
									</tr>
									<tr>
										<td>15:00:52.5</td>
										<td>127</td>
										<td>1 931 990,00</td>
									</tr>
									<tr class="table-warning">
										<td>14:53:17.1</td>
										<td>18</td>
										<td>1 931 990,00</td>
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