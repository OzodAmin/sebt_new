<?php 
require_once "../lang/ru.php";
require_once '../header.php';
require_once '../sidebar.php';
?>
<div class="card card-custom">
  <div class="card-header flex-wrap border-0 pt-6 pb-0">
    <div class="card-title">
        <h3 class="card-label">Утверждение член биржи</h3>
      </div>
      <div class="card-toolbar">
        <a href="/sebt/pages/firms.php" class="btn btn-primary"><i class="fas fa-chevron-left"></i>Вернуться в список</a>
      </div>
  </div>
  <!--begin::Form-->
  <form>
    <div class="card-body">
      <div class="form-group row">
        <label  class="col-4 col-form-label bg-warning">Филиал:</label>
        <div class="col-8">
          <input type="text" readonly class="form-control-plaintext" value="AJ Respublika ko'p tarmoqli agrosanoat birjasi">
        </div>
      </div>

      <div class="form-group row">
        <label  class="col-4 col-form-label bg-warning">ИНН:</label>
        <div class="col-8">
          <input type="text" readonly class="form-control-plaintext" value="123123123">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-4 col-form-label bg-warning">ОКЭД:</label>
        <div class="col-8">
          <input type="text" readonly class="form-control-plaintext" value="123123123">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-4 col-form-label bg-warning">ИНПО:</label>
        <div class="col-8">
          <input type="text" readonly class="form-control-plaintext" value="123123123">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-4 col-form-label bg-warning">Наименование организации:</label>
        <div class="col-8">
          <input type="text" readonly class="form-control-plaintext" value="ООО Fayz Baraka">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-4 col-form-label bg-warning">ФИО руководителя:</label>
        <div class="col-8">
          <input type="text" readonly class="form-control-plaintext" value="AA BB Valmarovich">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-4 col-form-label bg-warning">Юридический адрес:</label>
        <div class="col-8">
          <input type="text" readonly class="form-control-plaintext" value="Oqsoy 20, Tashkent city, Tashkent, Uzbekistan">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-4 col-form-label bg-warning">Рабочий телефон:</label>
        <div class="col-8">
          <input type="text" readonly class="form-control-plaintext" value="+998 71 777 77 77">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-4 col-form-label bg-warning">Мобильный телефон:</label>
        <div class="col-8">
          <input type="text" readonly class="form-control-plaintext" value="+998 94 1234567">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-4 col-form-label bg-warning">Емайл:</label>
        <div class="col-8">
          <input type="text" readonly class="form-control-plaintext" value="123@wer.uz">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-4 col-form-label bg-warning">Вебсайт:</label>
        <div class="col-8">
          <input type="text" readonly class="form-control-plaintext" value="ww.wer.uz">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-4 col-form-label bg-warning">Наименование банка:</label>
        <div class="col-8">
          <input type="text" readonly class="form-control-plaintext" value="Kapital">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-4 col-form-label bg-warning">МФО:</label>
        <div class="col-8">
          <input type="text" readonly class="form-control-plaintext" value="123123">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-4 col-form-label bg-warning">Расчетный счет:</label>
        <div class="col-8">
          <input type="text" readonly class="form-control-plaintext" value="123123123123">
        </div>
      </div>      
      
      
      <p class="text-primary"><b>Сопроводительные документы</b></p>
      <div class="row">
        <div class="col">
          <div class="card card-custom gutter-b card-stretch">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center">
                <img alt="" class="max-h-65px" src="/sebt/img/pdf.svg" />
                <a href="#" class="text-dark-75 font-weight-bold mt-15 font-size-lg">Паспортные данные</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card card-custom gutter-b card-stretch">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center">
                <img alt="" class="max-h-65px" src="/sebt/img/doc.svg" />
                <a href="#" class="text-dark-75 font-weight-bold mt-15 font-size-lg">Письмо</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card card-custom gutter-b card-stretch">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center">
                <img alt="" class="max-h-65px" src="/sebt/img/jpg.svg" />
                <a href="#" class="text-dark-75 font-weight-bold mt-15 font-size-lg">Guvohnoma</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card card-custom gutter-b card-stretch">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center">
                <img alt="" class="max-h-65px" src="/sebt/img/jpg.svg" />
                <a href="#" class="text-dark-75 font-weight-bold mt-15 font-size-lg">Договор на членство брокерской конторы</a>
              </div>
            </div>
          </div>
        </div>
      </div>


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
          <a href="/sebt/pages/firms.php" class="btn btn-primary mr-2">Сохранить</a>
          <a href="/sebt/pages/firms.php" class="btn btn-secondary">Отмена</a>
        </div>
      </div>

    </div>
  </form>
 <!--end::Form-->
</div>
<?php require_once '../footer.php'; ?>