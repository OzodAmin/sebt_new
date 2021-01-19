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
      <div class="row">
        <div class="col">
          <div class="form-group row">
            <label  class="col-4 col-form-label bg-warning">Форма заявки:</label>
            <div class="col-8">
              <input type="text" readonly class="form-control-plaintext" value="типовая заявка">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="form-group row">
            <label  class="col-4 col-form-label bg-warning">№ БК:</label>
            <div class="col-8">
              <input type="text" readonly class="form-control-plaintext" value="361">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="form-group row">
            <label  class="col-4 col-form-label bg-warning">Трейдер:</label>
            <div class="col-8">
              <input type="text" readonly class="form-control-plaintext" value="Рудакова С.С.">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="form-group row">
            <label  class="col-4 col-form-label bg-warning">Дата подачи:</label>
            <div class="col-8">
              <input type="text" readonly class="form-control-plaintext" value="26.03.2020 г. 18:53:40.3">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="form-group row">
            <label  class="col-4 col-form-label bg-warning">№ заявки:</label>
            <div class="col-8">
              <input type="text" readonly class="form-control-plaintext" value="850">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="form-group row">
            <label  class="col-4 col-form-label bg-warning">Тип заявки:</label>
            <div class="col-8">
              <input type="text" readonly class="form-control-plaintext" value="Реализация">
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row">
            <label  class="col-4 col-form-label bg-warning">Клиент:</label>
            <div class="col-8">
              <input type="text" readonly class="form-control-plaintext" value="ООО Toshkent Taminot Tayorlov savdo">
            </div>
          </div>
      <p class="text-primary"><b>Сведения по товару</b></p>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Наименование товара<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <select class="form-control">
            <option>Cталь прокат плоский нелегированная</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label>Марка товара<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <select class="form-control">
            <option>х/к марка стали-DC04EK,толщ 0,60мм, шир 1250мм</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Группа товара<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <select class="form-control">
           <option>Сельхозтехника, с/х оборудование, транспорт зап.части</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label>ТНВЭД<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <select class="form-control">
            <option>2309904100 - Комбикорма</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-2 col-form-label">Наименование (рус)</label>
        <div class="col-10">
          <input class="form-control" type="text" value="Шерстяное одеяло ведомственное синего цвета с тремя черными поперечными полосками двусторонней ворсовой поверхностью . Изделие соответствует ГОСТ 9382" readonly/>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-2 col-form-label">Наименование (узб)</label>
        <div class="col-10">
          <input class="form-control" type="text" value="Шерстяное одеяло ведомственное синего цвета с тремя черными поперечными полосками двусторонней ворсовой поверхностью . Изделие соответствует ГОСТ 9382" readonly/>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-2 col-form-label">Секция торгов</label>
        <div class="col-10">
          <select class="form-control"><optgroup label="Аукционные торги"><option>Секция реализации  конфискованного имущества по решению суда</option></optgroup></select>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-2 col-form-label">Группа товаров</label>
        <div class="col-10">
          <select class="form-control"><optgroup label="Аукционные торги"><option>Секция реализации работ</option><option>Секция реализации услуг</option></optgroup></select>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-2 col-form-label">Соответ-т товару из БКЛ</label>
        <div class="col-10">
          <select class="form-control"><option selected>мясо</option></select>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="form-group row">
            <label  class="col-4 col-form-label">Количество</label>
            <div class="col-8">
              <input type="text" class="form-control" value="100000" readonly>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="form-group row">
            <label  class="col-4 col-form-label">Ед. измерения</label>
            <div class="col-8">
              <select class="form-control">
                <option selected>тонна</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="form-group row">
            <label  class="col-4 col-form-label">Тип упаковки</label>
            <div class="col-8">
              <select class="form-control">
                <option selected>канистра</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="form-group row">
            <label  class="col-4 col-form-label">Ед. изм. упаковки</label>
            <div class="col-8">
              <select class="form-control">
                <option selected>тонна</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="form-group row">
            <label  class="col-4 col-form-label">Цена</label>
            <div class="col-8">
              <input type="text" class="form-control" value="40000" readonly>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="form-group row">
            <label  class="col-4 col-form-label">Денежная единица</label>
            <div class="col-8">
              <select class="form-control">
                <option selected>сум</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="form-group row">
            <label  class="col-4 col-form-label">Форма оплаты</label>
            <div class="col-8">
              <select class="form-control">
                <option selected>б/н</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="form-group row">
            <label  class="col-4 col-form-label">Вид сделки</label>
            <div class="col-8">
              <select class="form-control">
                <option selected>Форвард</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <p class="text-primary"><b>Базис поставки</b></p>
      <div class="row">
        <div class="col">
          <div class="form-group row">
            <label  class="col-4 col-form-label">Место нахождения товара (рус)</label>
            <div class="col-8">
              <input type="text" class="form-control" value="Г.ташкент" readonly>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="form-group row">
            <label  class="col-4 col-form-label">Место нахождения товара (узб)</label>
            <div class="col-8">
              <input type="text" class="form-control" value="Г.ташкент" readonly>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="form-group row">
            <label  class="col-4 col-form-label">Страна происхождения</label>
            <div class="col-8">
              <select type="text" class="form-control">
                <option>Узбекистан</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="form-group row">
            <label  class="col-4 col-form-label">Базис поставки</label>
            <div class="col-8">
              <select class="form-control">
                <option selected>EXW - самовывоз</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="form-group row">
            <label  class="col-4 col-form-label">Срок поставки</label>
            <div class="col-8">
              <div class="input-group">
                <input type="text" class="form-control" value="10" readonly>
                <div class="input-group-append">
                  <span class="input-group-text">банк. дней</span>
                </div>
              </div>
              <small class="form-text text-primary">Срок поставки допускает ввод цифр, и учитывается банк. дни.</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="form-group row">
            <label  class="col-4 col-form-label">Срок действия заявки</label>
            <div class="col-8">
              <div class="input-group">
                <input type="text" class="form-control" value="12.12.2020" readonly>
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                </div>
              </div>
              <small class="form-text text-primary">Формат даты: 'дд.мм.гггг'.</small>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="form-group row">
            <label  class="col-4 col-form-label">Размер лота</label>
            <div class="col-8">
              <input type="text" class="form-control" value="100" readonly>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="form-group row">
            <label  class="col-4 col-form-label">Количество</label>
            <div class="col-8">
              <input type="text" class="form-control" value="10" readonly>
            </div>
          </div>
        </div>
      </div>
      <p class="text-primary"><b>Дополнительная информация</b></p>
      <div class="form-group row">
        <label  class="col-2 col-form-label">Особые условия (Примечание) (рус)</label>
        <div class="col-10">
          <textarea class="form-control"></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-2 col-form-label">Особые условия (Примечание) (узб)</label>
        <div class="col-10">
          <textarea class="form-control"></textarea>
        </div>
      </div>
      <div class="form-row">
        <div class="col">
          <div class="form-group row">
            <label  class="col-8 col-form-label">% залога с продавца</label>
            <div class="col-4">
              <select class="form-control">
                <option selected>0</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="form-group row">
            <label  class="col-8 col-form-label">% залога с покупателя</label>
            <div class="col-4">
              <select class="form-control">
                <option selected>3</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <p class="text-primary"><b>Фото товара</b></p>
      <div class="row">
        <div class="col">
          <div class="card card-custom gutter-b card-stretch">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center">
                <img alt="" class="max-h-65px" src="/sebt/img/jpg.svg" />
                <a href="#" class="text-dark-75 font-weight-bold mt-15 font-size-lg">foto-1.jpg</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card card-custom gutter-b card-stretch">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center">
                <img alt="" class="max-h-65px" src="/sebt/img/jpg.svg" />
                <a href="#" class="text-dark-75 font-weight-bold mt-15 font-size-lg">foto-2.jpg</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card card-custom gutter-b card-stretch">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center">
                <img alt="" class="max-h-65px" src="/sebt/img/jpg.svg" />
                <a href="#" class="text-dark-75 font-weight-bold mt-15 font-size-lg">foto-3.jpg</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <p class="text-primary"><b>Сопроводительные документы к заявке</b></p>
      <div class="row">
        <div class="col">
          <div class="card card-custom gutter-b card-stretch">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center">
                <img alt="" class="max-h-65px" src="/sebt/img/pdf.svg" />
                <a href="#" class="text-dark-75 font-weight-bold mt-15 font-size-lg">Складская справка</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card card-custom gutter-b card-stretch">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center">
                <img alt="" class="max-h-65px" src="/sebt/img/doc.svg" />
                <a href="#" class="text-dark-75 font-weight-bold mt-15 font-size-lg">Гарантийное письмо</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card card-custom gutter-b card-stretch">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center">
                <img alt="" class="max-h-65px" src="/sebt/img/jpg.svg" />
                <a href="#" class="text-dark-75 font-weight-bold mt-15 font-size-lg">Документ качества (сертификат, паспорт, ТУ)</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card card-custom gutter-b card-stretch">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center">
                <img alt="" class="max-h-65px" src="/sebt/img/jpg.svg" />
                <a href="#" class="text-dark-75 font-weight-bold mt-15 font-size-lg">Договор поручениe</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <p class="text-primary"><b>Поля, заполняемые главным маклером</b></p>
      <div class="row">
        <div class="col">
          <div class="form-group row">
            <label  class="col-8 col-form-label bg-primary">Понижение цены не менее,%</label>
            <div class="col-4">
              <input type="text" class="form-control" value="0">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="form-group row">
            <label  class="col-8 col-form-label bg-primary">Повышение цены не более,%</label>
            <div class="col-4">
              <input type="text" class="form-control" value="0">
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
          <a href="/sebt/pages/buliten.php" class="btn btn-primary mr-2">Сохранить</a>
          <a href="/sebt/pages/offer_comfirm.php" class="btn btn-secondary">Отмена</a>
        </div>
      </div>


    </div>
  </form>
 <!--end::Form-->
</div>
<?php require_once '../footer.php'; ?>