<?php 
require_once "../lang/ru.php";
require_once '../header.php';
require_once '../sidebar.php';
?>
	<div class="card card-custom">
		<!--begin::Header-->
		<div class="card-header flex-wrap border-0 pt-6 pb-0">
			<div class="card-title">
				<h3 class="card-label">СПИСОК товаров</h3>
			</div>
			<div class="card-toolbar">
				<button type="button" data-toggle="modal" data-target="#newUserModal" class="btn btn-primary font-weight-bolder">
					<i class="fas fa-plus"></i>НОВЫЙ товар
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
				<th scope="col">Группа товаров</th>
				<th scope="col">Тариф</th>
				<th scope="col">Понижения</th>
				<th scope="col">Повышения</th>
				<th scope="col">Колво сессий</th>
				<th scope="col">Ликвиден</th>
				<th scope="col">Вкл в БКЛ</th>
				<th scope="col">Ед. изм</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>Портландцемент</td>
				<td>Металлы, металлопрокат</td>
				<td>Кластерная продукция (0.23%)</td>
				<td>0 %</td>
				<td>10 %</td>
				<td>2</td>
				<td><i class="far fa-check-square text-danger"></i></td>
				<td><i class="far fa-check-square text-danger"></i></td>
				<td>т</td>
				<td style='white-space: nowrap'>
					<button type="button" data-toggle="modal" data-target="#newUserModal" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></button>
					<button type="button" data-toggle="modal" data-target="#childList" class="btn btn-outline-info btn-xs"><i class="fas fa-list"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td>Карбамид</td>
				<td>Металлы, металлопрокат</td>
				<td>Кластерная продукция (0.23%)</td>
				<td>0 %</td>
				<td>10 %</td>
				<td>2</td>
				<td><i class="far fa-check-square text-danger"></i></td>
				<td><i class="far fa-check-square text-danger"></i></td>
				<td>т</td>
				<td style='white-space: nowrap'>
					<button type="button" data-toggle="modal" data-target="#newUserModal" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></button>
					<button type="button" data-toggle="modal" data-target="#childList" class="btn btn-outline-info btn-xs"><i class="fas fa-list"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td>Шрот хлопковый</td>
				<td>Металлы, металлопрокат</td>
				<td>Кластерная продукция (0.23%)</td>
				<td>0 %</td>
				<td>10 %</td>
				<td>2</td>
				<td><i class="far fa-check-square text-danger"></i></td>
				<td><i class="far fa-check-square text-danger"></i></td>
				<td>т</td>
				<td style='white-space: nowrap'>
					<button type="button" data-toggle="modal" data-target="#newUserModal" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></button>
					<button type="button" data-toggle="modal" data-target="#childList" class="btn btn-outline-info btn-xs"><i class="fas fa-list"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">4</th>
				<td>Фосфомочевина</td>
				<td>Металлы, металлопрокат</td>
				<td>Экспортно-импортные, внутренние контракты с НДС</td>
				<td>0 %</td>
				<td>10 %</td>
				<td>2</td>
				<td></td>
				<td></td>
				<td>т</td>
				<td style='white-space: nowrap'>
					<button type="button" data-toggle="modal" data-target="#newUserModal" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></button>
					<button type="button" data-toggle="modal" data-target="#childList" class="btn btn-outline-info btn-xs"><i class="fas fa-list"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">5</th>
				<td>Масло хлопковое</td>
				<td>Металлы, металлопрокат</td>
				<td>Кластерная продукция (0.23%)</td>
				<td>0 %</td>
				<td>10 %</td>
				<td>2</td>
				<td></td>
				<td><i class="far fa-check-square text-danger"></i></td>
				<td>т</td>
				<td style='white-space: nowrap'>
					<button type="button" data-toggle="modal" data-target="#newUserModal" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></button>
					<button type="button" data-toggle="modal" data-target="#childList" class="btn btn-outline-info btn-xs"><i class="fas fa-list"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">6</th>
				<td>Карбамид</td>
				<td>Металлы, металлопрокат</td>
				<td>Кластерная продукция (0.23%)</td>
				<td>0 %</td>
				<td>10 %</td>
				<td>2</td>
				<td><i class="far fa-check-square text-danger"></i></td>
				<td></td>
				<td>т</td>
				<td style='white-space: nowrap'>
					<button type="button" data-toggle="modal" data-target="#newUserModal" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></button>
					<button type="button" data-toggle="modal" data-target="#childList" class="btn btn-outline-info btn-xs"><i class="fas fa-list"></i></button>
				</td>
			</tr>
			<tr>
				<th scope="row">7</th>
				<td>Магний</td>
				<td>Металлы, металлопрокат</td>
				<td>Кластерная продукция (0.23%)</td>
				<td>0 %</td>
				<td>10 %</td>
				<td>2</td>
				<td><i class="far fa-check-square text-danger"></i></td>
				<td></td>
				<td>т</td>
				<td style='white-space: nowrap'>
					<button type="button" data-toggle="modal" data-target="#newUserModal" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></button>
					<button type="button" data-toggle="modal" data-target="#childList" class="btn btn-outline-info btn-xs"><i class="fas fa-list"></i></button>
				</td>
			</tr>
			
		</tbody>
	</table>
</div>
<div class="modal" id="newUserModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">НОВЫЙ товар</h5>
			</div>
			<div class="modal-body">
				<div class="form-group row">
			        <label class="col-sm-4 col-form-label bg-warning">Наименование (рус)</label>
			        <div class="col-sm-8">
			        	<input type="text" class="form-control">
			        </div>
			    </div>
			    <div class="form-group row">
			        <label class="col-sm-4 col-form-label bg-warning">Наименование (узб)</label>
			        <div class="col-sm-8">
			        	<input type="text" class="form-control">
			        </div>
			    </div>
			    <div class="form-group row">
			        <label class="col-sm-4 col-form-label bg-warning">Группа товаров</label>
			        <div class="col-sm-8">
			        	<select class="form-control"><option>(не выбрано)</option><option>Уфимская торговая площадка</option><option>Челябинская торговая площадка</option><option>Уральская торговая площадка</option><option>Технические культуры и продукция их переработки</option><option>Сельхозпродукция и продукция её переработки</option><option>Сельхозхимия, химическая продукция</option><option>Энергоносители</option><option>Технологические комплексы и мини технологии</option><option>Сельхозтехника, с/х оборудование, транспорт зап.части</option><option>Оборудование и продукция произв.технического назначения</option><option>Металлы, металлопрокат</option><option>Строительные материалы</option><option>Целлюлозно-бумажная продукция</option><option>Текстильная продукция</option><option>Кабельная продукция и провода</option><option>Напитки и табачные изделия</option><option>Компьютеры и оргтехника</option><option>Товары народного потребления</option><option>Рабочая спец.одежда</option><option>Мед.оборудование и лекарственные препараты</option><option>Недвижимость</option><option>Ценные бумаги</option><option>Работы строительно-монтажные</option><option>Работы по ремонту оборудования, транспортных средств</option><option>Переработка сырья</option><option>Услуги туристические</option><option>Услуги коммунальные</option><option>Толинг</option><option>Услуги транспортные</option><option>Прочее</option></select>
			        </div>
			    </div>
			    <div class="form-group row">
			        <label class="col-sm-4 col-form-label bg-warning">Тариф</label>
			        <div class="col-sm-8">
			        	<select class="form-control"><option>Алюминий вторичный (0.23%)</option><option>Бензин автомобильный (0.115%)</option><option>Бензин экстракционный (0.115%)</option><option>Дизельное топливо (0.115%)</option><option>Керосин технический (0.115%)</option><option>Кластерная продукция (0.23%)</option><option>Кластерная продукция (0.115%)</option><option>Комбикорма (0.115%)</option><option>Мазут (0.115%)</option><option>Масло растительное (хлопковое) (0.115%)</option><option>Медная катанка (0.23%)</option><option>Медный купорос (0.115%)</option><option>Медь катодная (0.23%)</option><option>Минеральные удобрения (0.115%)</option><option>Мука пшеничная (0.115%)</option><option>Нефтяной битум (0.115%)</option><option>Нефтяной парафин (0.115%)</option><option>Нефтяной растворитель (0.115%)</option><option>Нить ацетатная (0.115%)</option><option>Печное топливо (0.115%)</option><option>Полипропилен (0.115%)</option><option>Полиэтилен (0.115%)</option><option>Прокат черных металлов (0.115%)</option><option>Пшеница (0.115%)</option><option>Сахар (0.115%)</option><option>Сера техническая (0.115%)</option><option>Сжиженный газ (0.575%)</option><option>Сода кальцинированная (0.115%)</option><option>Стекло строительное (0.115%)</option><option>Технические масла (0.115%)</option><option>Технические хлопковые семена (0.115%)</option><option>Топочный мазут (0.115%)</option><option>Уголь (0.115%)</option><option>Хлопковый линт (0.115%)</option><option>Хлопок-волокно (0.115%)</option><option>Хозяйственное мыло (0.115%)</option><option>Цемент (0.115%)</option><option>Цементный клинкер (0.115%)</option><option>Цинк металлический (0.23%)</option><option>Шелуха хлопковый (0.345%)</option><option>Шелуха хлопковый (0.1725%)</option><option>Шрот хлопковый (0.345%)</option><option>Шрот хлопковый (0.1725%)</option></select>
			        </div>
			    </div>
			    <div class="form-group row">
			        <label class="col-sm-4 col-form-label bg-warning">Предельный % понижения цены</label>
			        <div class="col-sm-8">
			        	<div class="input-group">
							<input type="text" class="form-control">
							<div class="input-group-prepend">
								<span class="input-group-text">%</span>
							</div>
						</div>
			        </div>
			    </div>
			    <div class="form-group row">
			        <label class="col-sm-4 col-form-label bg-warning">Предельный % повышения цены</label>
			        <div class="col-sm-8">
			        	<div class="input-group">
							<input type="text" class="form-control">
							<div class="input-group-prepend">
								<span class="input-group-text">%</span>
							</div>
						</div>
			        </div>
			    </div>
			    <div class="form-group row">
			        <label class="col-sm-4 col-form-label bg-warning">Колво сессий</label>
			        <div class="col-sm-8">
			        	<input type="text" class="form-control">
			        </div>
			    </div>
			    <div class="form-group row">
			        <label class="col-sm-4 col-form-label bg-warning">Признак ликвидности</label>
			        <div class="col-sm-8">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio">
							<label class="form-check-label">Да</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio">
							<label class="form-check-label">Нет</label>
						</div>
			        </div>
			    </div>
			    <div class="form-group row">
			        <label class="col-sm-4 col-form-label bg-warning">Включена в котировальный лист</label>
			        <div class="col-sm-8">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio">
							<label class="form-check-label">Да</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio">
							<label class="form-check-label">Нет</label>
						</div>
			        </div>
			    </div>
			    <div class="form-group row">
			        <label class="col-sm-4 col-form-label bg-warning">Биржевой сбор с покупателя</label>
			        <div class="col-sm-8">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio">
							<label class="form-check-label">Да</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio">
							<label class="form-check-label">Нет</label>
						</div>
			        </div>
			    </div>
			    <div class="form-group row">
			        <label class="col-sm-4 col-form-label bg-warning">Биржевой сбор с продавца</label>
			        <div class="col-sm-8">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio">
							<label class="form-check-label">Да</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio">
							<label class="form-check-label">Нет</label>
						</div>
			        </div>
			    </div>
			    <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
				<button type="button" class="btn btn-primary">Сохранить</button>
			</div>
		</div>
	</div>
</div>
<div class="modal" id="childList" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Семена</h5>
				<button type="button" class="btn btn-outline-info" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
					<i class="fas fa-plus"></i>Новая марка товара
				</button>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i aria-hidden="true" class="ki ki-close"></i>
				</button>
			</div>
			<div class="modal-body">
				<div class="collapse" id="collapseExample">
					<div class="card card-body">
						<div class="form-group row">
					        <label class="col-sm-4 col-form-label bg-warning">Наименование (рус)</label>
					        <div class="col-sm-8">
					        	<input type="text" class="form-control">
					        </div>
					    </div>
					    <div class="form-group row">
					        <label class="col-sm-4 col-form-label bg-warning">Наименование (узб)</label>
					        <div class="col-sm-8">
					        	<input type="text" class="form-control">
					        </div>
					    </div>
					    <button type="button" class="btn btn-primary" id="save">Сохранить</button>
					</div>
				</div>
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">№</th>
								<th scope="col">Наименование</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>2 сорт</td>
								<td><button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>2 сорт 1 класс</td>
								<td><button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>2 сорт 2 класс</td>
								<td><button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button></td>
							</tr>
							<tr>
								<th scope="row">4</th>
								<td>5-тип, 5-сорт, класс «Оддий» 2020г.</td>
								<td><button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button></td>
							</tr>
							<tr>
								<th scope="row">5</th>
								<td>4-тип, сорт-4, класс «Яхши»,ур.2018</td>
								<td><button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button></td>
							</tr>
						</tbody>
					</table>
				</div>
				<center><button type="button" class="btn btn-secondary text-center" data-dismiss="modal">Закрыть</button></center>
			</div>
		</div>
	</div>
</div>

		</div>
		<!--end::Body-->
	</div>

<?php require_once '../footer.php'; ?>