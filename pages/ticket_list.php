<?php 
require_once "../lang/ru.php";
require_once '../header.php';
require_once '../sidebar.php';
?>
<div class="card card-custom">
	<div class="card-header card-header-tabs-line nav-tabs-line-3x">
		<div class="card-toolbar">
			<ul class="nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-3x">
				<li class="nav-item mr-3">
					<a class="nav-link active" data-toggle="tab" href="#kt_user_edit_tab_1">
						<span class="nav-text font-size-lg">ПРОТОКОЛЫ ТОРГОВ</span>
					</a>
				</li>
				<li class="nav-item mr-3">
					<a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_2">
						<span class="nav-text font-size-lg">ДОГОВОРЫ С ЗАЛОГОМ</span>
					</a>
				</li>
				<li class="nav-item mr-3">
					<a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_3">
						<span class="nav-text font-size-lg"><i class="fas fa-plus"></i>&nbsp;НОВЫЙ ДОКУМЕНТ</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="card-body">
		<div class="tab-content">
			<div class="tab-pane show active px-7" id="kt_user_edit_tab_1" role="tabpanel">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">№</th>
								<th scope="col">Дата</th>
								<th scope="col">Клиент-продавец</th>
								<th scope="col">Клиент-покупатель</th>
								<th scope="col">Товар</th>
								<th scope="col" style="width: 15%;">Сумма</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>2502/1-В-Я<br><span class="text-danger">В-Я</span></td>
								<td>25.02.20</td>
								<td>"BALXI-CHORMANGIT" ММТП<br><span class="text-danger">БК 1628, OOO "QASHQADARYO RIELT UNIVERSAL"</span></td>
								<td>Отамуродов Асрор Холикович<br><span class="text-danger">БК 1235, «SAMARQAND BALANS» XK</span></td>
								<td><a href="/sebt/pages/ticket_view.php">Трактор МТЗ-80х, 1988 г/в, г/н 76-59 ЕЯ, б/у.<br><span class="text-danger">Внутренний</span></a></td>
								<td>12 000 000,00<br><span class="text-danger">сум</span></td>
								<td><span class="label label-warning label-inline font-weight-bolder">на регистрации</span></td>
							</tr>
							<tr>
								<td>2502/1-В-Я<br><span class="text-danger">В-Я</span></td>
								<td>25.02.20</td>
								<td>"BALXI-CHORMANGIT" ММТП<br><span class="text-danger">БК 1628, OOO "QASHQADARYO RIELT UNIVERSAL"</span></td>
								<td>Отамуродов Асрор Холикович<br><span class="text-danger">БК 1235, «SAMARQAND BALANS» XK</span></td>
								<td><a href="/sebt/pages/ticket_view.php">Трактор МТЗ-80х, 1988 г/в, г/н 76-59 ЕЯ, б/у.<br><span class="text-danger">Внутренний</span></a></td>
								<td>12 000 000,00<br><span class="text-danger">сум</span></td>
								<td><span class="label label-secondary label-inline font-weight-bolder">аннулированный</span></td>
							</tr>
							<tr>
								<td>2502/1-В-Я<br><span class="text-danger">В-Я</span></td>
								<td>25.02.20</td>
								<td>"BALXI-CHORMANGIT" ММТП<br><span class="text-danger">БК 1628, OOO "QASHQADARYO RIELT UNIVERSAL"</span></td>
								<td>Отамуродов Асрор Холикович<br><span class="text-danger">БК 1235, «SAMARQAND BALANS» XK</span></td>
								<td><a href="/sebt/pages/ticket_view.php">Трактор МТЗ-80х, 1988 г/в, г/н 76-59 ЕЯ, б/у.<br><span class="text-danger">Внутренний</span></a></td>
								<td>12 000 000,00<br><span class="text-danger">сум</span></td>
								<td><span class="border label label-white label-inline font-weight-bolder">на бирже</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="tab-pane px-7" id="kt_user_edit_tab_2" role="tabpanel">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">№ договора</th>
								<th scope="col">Дата торгов</th>
								<th scope="col">БК прод.</th>
								<th scope="col">БК покуп.</th>
								<th scope="col">Товар</th>
								<th scope="col" style="width: 15%;">Сумма</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>0805/444-Б</td>
								<td>08.05.20</td>
								<td class="text-center">214<br><span class="text-danger">ООО "UCHQO`RG`ON YOG"</span></td>
								<td class="text-center">542<br><span class="text-danger">ООО СП "UZTEX UCHKURGAN"</span></td>
								<td><a href="/sebt/pages/ticket_view.php">Шрот хлопковый</a></td>
								<td>23 500 000,00<br><span class="text-danger">сум</span></td>
								<td><span class="label label-warning label-inline font-weight-bolder">действующий</span></td>
							</tr>
							<tr>
								<td>1903/204-Б</td>
								<td>19.03.20</td>
								<td class="text-center">539<br><span class="text-danger">АО "BEKOBODSEMENT"</span></td>
								<td class="text-center">441<br><span class="text-danger">ООО "RESTRUCTURING"</span></td>
								<td>Клинкер портландцементный марки 400КЛ ПЦ-400 Oz DST 2801:2013</td>
								<td>1 788 075 045,00<br><span class="text-danger">сум</span></td>
								<td><span class="label label-secondary label-inline font-weight-bolder">аннулированный</span></td>
							</tr>
							<tr>
								<td>2003/235-Б</td>
								<td>20.03.20</td>
								<td class="text-center">546<br><span class="text-danger">ООО "GLOBAL TEXTILE SOLUTIONS"</span></td>
								<td class="text-center">333<br><span class="text-danger">ООО "BEKTEMIR OIL GROUP"</span></td>
								<td>Семена хлопковые технические 1 сорт 1 класс</td>
								<td>110 000 000,00<br><span class="text-danger">сум</span></td>
								<td><span class="border label label-white label-inline font-weight-bolder">оплата 100%</span></td>
							</tr>
							<tr>
								<td>2003/232-Б</td>
								<td>20.03.20</td>
								<td class="text-center">546<br><span class="text-danger">ООО "GLOBAL TEXTILE SOLUTIONS"</span></td>
								<td class="text-center">333<br><span class="text-danger">ООО "BEKTEMIR OIL GROUP"</span></td>
								<td>Семена хлопковые технические 1 сорт 1 класс</td>
								<td>110 000 000,00<br><span class="text-danger">сум</span></td>
								<td><span class="border label label-success label-inline font-weight-bolder">закрытый</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="tab-pane px-7" id="kt_user_edit_tab_3" role="tabpanel">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">Торги</th>
								<th scope="col">БК прод.</th>
								<th scope="col">БК покуп.</th>
								<th scope="col">Товар</th>
								<th scope="col">Кол-во</th>
								<th scope="col">Цена</th>
								<th scope="col" style="width: 15%;">Сумма</th>
								<th scope="col">Базис</th>
								<th scope="col">Пункт</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>В-Я</td>
								<td class="text-center">214<br><span class="text-danger">ООО "UCHQO`RG`ON YOG"</span></td>
								<td class="text-center">542<br><span class="text-danger">ООО СП "UZTEX UCHKURGAN"</span></td>
								<td>Бутылка бытовая (стекло) пищевого назначения, марка К-1-КПм-500, емк. 0,5л</td>
								<td>266 272<br><span class="text-danger">шт</span></td>
								<td>180,18<br><span class="text-danger">сум</span></td>
								<td>47 976 888,96<br><span class="text-danger">сум</span></td>
								<td>DAF<br><span class="text-danger">60 дней</span></td>
								<td>ст.ж/д Сарыагач</td>
								<td>
									<a href="/sebt/pages/ticket_new.php" class="btn btn-icon btn-light btn-hover-primary">
										<i class="fas fa-arrow-right"></i>
									</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require_once '../footer.php'; ?>