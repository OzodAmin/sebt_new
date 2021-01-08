<?php 
require_once "../lang/ru.php";
require_once '../header.php';
require_once '../sidebar.php';
?>
<div class="card card-custom">
  <div class="card-header flex-wrap border-0 pt-6 pb-0">
    <div class="card-title">
        <h3 class="card-label">Ввод нового счета на оплату</h3>
      </div>
      <div class="card-toolbar">
        <a href="/sebt/pages/bill_list.php" class="btn btn-primary"><i class="fas fa-chevron-left"></i>Вернуться в список</a>
      </div>
  </div>
  <!--begin::Form-->
  <form>
    <div class="card-body">
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Договор с залогом:</label>
        <div class="col-9">
          <a href="#">№ 0805/444-Б от 08.05.2020 г.</a>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Товар:</label>
        <div class="col-9">Шрот хлопковый</div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Сумма:</label>
        <div class="col-9">23 500 000,00 сум</div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Плательщик:</label>
        <div class="col-9">
          <select class="form-control">
            <option> - выберите - </option>
            <option>MChJ "YOG`-MOY SAVDO"</option>
            <option>OOO "PRESTIJ RILT"</option>
            <option>ООО "UCHQO`RG`ON YOG"</option>
            <option selected="">ООО СП "UZTEX UCHKURGAN"</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Сторона:</label>
        <div class="col-9">Покупатель</div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Сторона:</label>
        <div class="col-9">
          <input type="text" class="form-control" value='ООО СП "UZTEX UCHKURGAN"'>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Адрес:</label>
        <div class="col-9">
          <input type="text" class="form-control" value='Наманганская область, Нарынский район, город "Хаккулабад", Навои МФЙ, ул. "Беруний&qu'>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">ИНН:</label>
        <div class="col-9">
          <input type="text" class="form-control" value='303328592'>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">ОКОНХ:</label>
        <div class="col-9">
          <input type="text" class="form-control" value='303328592'>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Расчетный счет:</label>
        <div class="col-9">
          <input type="text" class="form-control" value='303328592'>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Банк:</label>
        <div class="col-9">
          <input type="text" class="form-control" value='303328592'>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">МФО банка:</label>
        <div class="col-9">
          <input type="text" class="form-control" value='303328592'>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Телефон:</label>
        <div class="col-9">
          <input type="text" class="form-control" value='303328592'>
        </div>
      </div>

      <p class="text-primary"><b>Данные о счете</b></p>

      
      <div class="form-group row">
        <label  class="col-4 col-form-label bg-warning">Клиент:</label>
        <div class="col-8">
          
        </div>
      </div>
     
      
      
      
      
      
      
      
      
      
      <div class="form-group row">
        <label  class="col-2 col-form-label">Статус</label>
        <div class="col-10">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio">
            <label class="form-check-label">утвердить</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio">
            <label class="form-check-label">отклонить</label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-2 col-form-label">Пояснение к решению</label>
        <div class="col-10">
          <textarea class="form-control"></textarea>
        </div>
      </div>


    </div>
    <div class="card-footer">
      <a href="/sebt/pages/offer_comfirm.php" class="btn btn-secondary mr-2">Отмена</a>
      <button type="button" class="btn btn-primary">Сохранить</button>
    </div>
  </form>
 <!--end::Form-->
</div>
<?php require_once '../footer.php'; ?>