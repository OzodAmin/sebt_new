<?php 
require_once "../lang/ru.php";
require_once '../header.php';
require_once '../sidebar.php';
?>
	<div class="card card-custom">
		<div class="card-header flex-wrap border-0 pt-6 pb-0">
			<div class="card-title">
				<h3 class="card-label">Список оплат</h3>
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr class="align-middle text-center">
							<th scope="col">№</th>
							<th scope="col">Номер</th>
							<th scope="col">Дата</th>
							<th scope="col">Детали платежа</th>
							<th scope="col">Сумма оплаты, сум</th>
							<th scope="col">Сумма распред., сум</th>
							<th scope="col">Статус</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>1</th>
							<td>583</td>
							<td>19.03.2020</td>
							<td>За биржевой сбор согласно счет фактуре №322 от 04.03.2020 г.к котракту №325/3 от 04.03.2020 г.</td>
							<td>724 500,00</td>
							<td>724 500,00</td>
							<td><span class="label label-light label-inline font-weight-bolder ">нераспределенный</span></td>
						</tr>
						<tr>
							<th>2</th>
							<td>285</td>
							<td>07.01.2021</td>
							<td>100% оплата за аренду помещения с-но дог.№219/1/01/2020 от 03.01.2020 года</td>
							<td>1 922 800,00</td>
							<td>1 922 800,00</td>
							<td><span class="label label-success label-inline font-weight-bolder ">распределенный</span></td>
						</tr>
						<tr>
							<th>3</th>
							<td>91</td>
							<td>07.01.2021</td>
							<td>Предоплата 100% по дог. № 215/3/01/2020 от 03.01.2020 г.за аренду помещения за март 2020г</td>
							<td>1 922 800,00</td>
							<td>1 922 800,00</td>
							<td><span class="label label-primary label-inline font-weight-bolder ">авансовый платеж</span></td>
						</tr>
						<tr>
							<th>4</th>
							<td>118</td>
							<td>07.01.2021</td>
							<td>ОПЛАТА ЗА ЭЛ.ЭНЕРГИЮ ЗА ЯНВАРЬ ФЕВРАЛЬ 2020Г. СОГЛ СЧ ФАКТ № 1/02 ОТ 31.01.2020Г. И 2/02Э ОТ 29.02.2020Г.</td>
							<td>1 922 800,00</td>
							<td>1 922 800,00</td>
							<td><span class="label label-secondary label-inline font-weight-bolder ">ошибочный</span></td>
						</tr>
						<tr>
							<th>5</th>
							<td>95</td>
							<td>07.01.2021</td>
							<td>Погашение процентов по депоз.дог. 37/000 от 01.11.2019-Проценты по депозиту к оплате</td>
							<td>1 922 800,00</td>
							<td>1 922 800,00</td>
							<td><span class="label label-warning label-inline font-weight-bolder ">возврат</span></td>
						</tr>
						<tr>
							<th>6</th>
							<td>08</td>
							<td>07.01.2021</td>
							<td>Погашение процентов по депоз.дог. 37/000 от 01.11.2019-Проценты по депозиту к оплате</td>
							<td>1 922 800,00</td>
							<td>1 922 800,00</td>
							<td><span class="label label-warning label-inline font-weight-bolder ">возврат</span></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<?php require_once '../footer.php'; ?>