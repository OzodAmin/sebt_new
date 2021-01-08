<?php 
require_once "../lang/ru.php";
require_once '../header.php';
require_once '../sidebar.php';
?>
<div class="card card-custom">
  <div class="card-header flex-wrap border-0 pt-6 pb-0">
    <div class="card-title">
        <h3 class="card-label">Просмотр счета на оплату</h3>
      </div>
      <div class="card-toolbar">
        <a href="/sebt/pages/bill_list.php" class="btn btn-primary mr-2"><i class="fas fa-chevron-left"></i>Вернуться в список</a>
        <a href="/sebt/pages/bill_prn.php" target="_blank" class="btn btn-secondary"><i class="flaticon2-printer"></i> Счет на печать</a>
      </div>
  </div>
  <!--begin::Form-->
  <form>
    <div class="card-body">
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Счет:</label>
        <div class="col-9">№ 1 от 07.01.2021 г.</div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Контракт / протокол торгов:</label>
        <div class="col-9">
          <a href="#">№ 359/3 от 12.03.2020 г.</a>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Плательщик:</label>
        <div class="col-9">
          <a href="#">Paxtakor Sifat Yog MCHJ</a>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Сумма:</label>
        <div class="col-9">432 000,00 сум</div>
      </div>
      <div class="form-group row">
        <label  class="col-3 col-form-label bg-warning">Срок оплаты:</label>
        <div class="col-9">17.01.2021 г.</div>
      </div>
    </div>
    <div class="card-footer">
      
    </div>
  </form>
 <!--end::Form-->
</div>
<?php require_once '../footer.php'; ?>