<?php 
require_once "../lang/ru.php";
require_once '../header.php';
require_once '../sidebar.php';
?>
<div class="card card-custom">
  <div class="card-header flex-wrap border-0 pt-6 pb-0">
    <div class="card-title">
        <h3 class="card-label">Утверждение заявки</h3>
      </div>
      <div class="card-toolbar">
        <a href="/sebt/pages/offer_comfirm.php" class="btn btn-primary"><i class="fas fa-chevron-left"></i>Вернуться в список</a>
      </div>
  </div>
  <!--begin::Form-->
  <form>
    <div class="card-body">

      <div class="form-group row">
        <label  class="col-4 col-form-label bg-warning">№ БК:</label>
        <div class="col-8">
          <input type="text" readonly class="form-control-plaintext" value="361">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-4 col-form-label bg-warning">Клиент:</label>
        <div class="col-8">
          <input type="text" readonly class="form-control-plaintext" value='ООО "DAVRON BOBO22"'>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-4 col-form-label bg-warning">Срок договора:</label>
        <div class="col-8">
          <input type="text" readonly class="form-control-plaintext" value="12.12.2020">
        </div>
      </div>
      
      
      <p class="text-primary"><b>Сопроводительные документы к заявке</b></p>
      <div class="row">
        <div class="col">
          <div class="card card-custom gutter-b card-stretch">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center">
                <img alt="" class="max-h-65px" src="/sebt/img/pdf.svg" />
                <a href="#" class="text-dark-75 font-weight-bold mt-15 font-size-lg">Договор на брокерское обслуживание</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <p class="text-primary"><b>Поля, заполняемые модератором</b></p>
      
      <div class="form-group row">
        <label  class="col-2 col-form-label bg-primary">Статус</label>
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
        <label  class="col-2 col-form-label bg-primary">Пояснение к решению</label>
        <div class="col-10">
          <textarea class="form-control"></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-2 col-form-label bg-primary">Код подтверждения действия<span class="text-danger">*</span></label>
        <div class="col-6">
          <input type="text" class="form-control" placeholder="****">
        </div>
        <div class="col-4">
          <a href="/sebt/pages/bk_confirm.php" class="btn btn-primary mr-2">Сохранить</a>
          <a href="/sebt/pages/bk_confirm.php" class="btn btn-secondary">Отмена</a>
        </div>
      </div>


    </div>
  </form>
 <!--end::Form-->
</div>
<?php require_once '../footer.php'; ?>