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
            <option> - выберите - </option>
            <option>Cталь прокат плоский нелегированная</option>
            <option></option>
            <option></option>
            <option></option>
            <option></option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label>Марка товара<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <select class="form-control">
            <option> - выберите - </option>
            <option>х/к марка стали-DC04EK,толщ 0,60мм, шир 1250мм</option>
            <option>х/к марка стали-DC01,толщ 0,50мм</option>
            <option></option>
            <option></option>
            <option></option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Группа товара<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <select class="form-control">
            <option>(не выбрано)</option><option>Технические культуры и продукция их переработки</option><option>Сельхозпродукция и продукция её переработки</option><option>Сельхозхимия, химическая продукция</option><option>Энергоносители</option><option>Технологические комплексы и мини технологии</option><option>Сельхозтехника, с/х оборудование, транспорт зап.части</option><option>Оборудование и продукция произв.технического назначения</option><option>Металлы, металлопрокат</option><option>Строительные материалы</option><option>Целлюлозно-бумажная продукция</option><option>Текстильная продукция</option><option>Кабельная продукция и провода</option><option>Напитки и табачные изделия</option><option>Компьютеры и оргтехника</option><option>Товары народного потребления</option><option>Рабочая спец.одежда</option><option>Мед.оборудование и лекарственные препараты</option><option>Недвижимость</option><option>Ценные бумаги</option><option>Прочее</option><option>Работы строительно-монтажные</option><option>Работы по ремонту оборудования, транспортных средств</option><option>Переработка сырья</option><option>Услуги туристические</option><option>Услуги коммунальные</option><option>Толинг</option><option>Услуги транспортные</option><option>Уральская торговая площадка</option><option>Челябинская торговая площадка</option><option>Уфимская торговая площадка</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label>ТНВЭД<span class="text-danger">*</span>&nbsp;<i class="far fa-question-circle text-warning" data-toggle="tooltip" data-placement="top" data-theme="dark" title="Дополнительная информация для ввода данных."></i></label>
          <select class="form-control">
            <option> - выберите - </option>
            <option>0207119000 - Куриное мясо</option>
            <option>040300000  - Молоко</option>
            <option>0407001900 - Куриное яйцо</option>
            <option>071300000  - Горох (ядрица)</option>
            <option>100100000  - Кормовые смеси</option>
            <option>1003900000 - Ячмень</option>
            <option>1206009900 - Семена подсолнечника, дробленые или недробленые</option>
            <option>151800000  - Животные жиры и масла</option>
            <option>230600000  - Шелуха хлопковая</option>
            <option>2309904100 - Комбикорма</option>
            <option>2517410000 - порошок из мрамора</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-2 col-form-label">Наименование (рус)</label>
        <div class="col-10">
          <input class="form-control" type="text"/>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-2 col-form-label">Наименование (узб)</label>
        <div class="col-10">
          <input class="form-control" type="text"/>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-2 col-form-label">Секция торгов</label>
        <div class="col-10">
          <select class="form-control"><option>(не выбрано)</option><optgroup label="Биржевые торги"><option>Секция реализации высоколиквидной продукции предприятий-монополистов</option><option selected="">Секция реализации биржевых товаров, не входящих в перечень высоколиквидной продукции предприятий-монополистов</option><option>Секция фьючерсной торговли</option><option>Секция торгов опционами</option></optgroup><optgroup label="Аукционные торги"><option>Секция реализации  конфискованного имущества по решению суда</option><option>Секция реализации товаров, обладающих индивидуальными свойствами</option></optgroup><optgroup label="Выставочно-ярмарочные торги"><option>Секция реализации нестандартных товаров</option><option>Секция реализации работ</option><option>Секция реализации услуг</option></optgroup></select>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-2 col-form-label">Группа товаров</label>
        <div class="col-10">
          <select class="form-control"><option>(не выбрано)</option><optgroup label="Биржевые торги"><option>Секция реализации высоколиквидной продукции предприятий-монополистов</option><option selected="">Секция реализации биржевых товаров, не входящих в перечень высоколиквидной продукции предприятий-монополистов</option><option>Секция фьючерсной торговли</option><option>Секция торгов опционами</option></optgroup><optgroup label="Аукционные торги"><option>Секция реализации  конфискованного имущества по решению суда</option><option>Секция реализации товаров, обладающих индивидуальными свойствами</option></optgroup><optgroup label="Выставочно-ярмарочные торги"><option>Секция реализации нестандартных товаров</option><option>Секция реализации работ</option><option>Секция реализации услуг</option></optgroup></select>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-2 col-form-label">Соответ-т товару из БКЛ</label>
        <div class="col-10">
          <select class="form-control"><option>(не выбрано)</option><option>Абрикос</option><option>Арахис нежареный лущеный</option><option>Арбуз</option><option>Виноград</option><option6">горох</option><option>Дыня</option><option2">Зелень</option><option>Капуста</option><option>Комбикорма</option><option>Концентрированные соки</option><option>Корень солодковый</option><option>Крупа гречневая</option><option>Кукуруза</option><option>Лук</option><option>Масло подсолнечное</option><option>Масло растительное (хлопковое)</option><option>Масло сливочное</option><option4">Масло хлоп рафин. недезод. экстрак. на произв. саломаса</option><option>Масло хлопковое</option><option>Масло хлопковое 2 сорт для технических целях</option><option>маш</option><option>Молоко сухое</option><option>Мука</option><option selected>мясо</option><option>Овощи</option><option>отруби</option><option>Паста томатная</option><option>продукты питания</option><option>Пшеница</option><option>Рис</option><option>Рожь</option><option>Сахар</option><option>Семена подсолнечника</option><option>Семена хлопковые технические (джинированные)</option><option>Семена хлопчатника, технический</option><option>Слива</option><option>сок</option><option>Соя</option><option>сыр</option><option>фасоль</option><option>фрукты</option><option>Хлопковой волокна</option><option>Черешня</option><option>Шрот соевый</option><option>Экстракт солодкового корня</option><option>Ячмень</option></select>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="form-group row">
            <label  class="col-4 col-form-label">Количество</label>
            <div class="col-8">
              <input type="text" class="form-control" value="100000">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="form-group row">
            <label  class="col-4 col-form-label">Ед. измерения</label>
            <div class="col-8">
              <select class="form-control">
                <option>шт</option>
                <option>грамм</option>
                <option>кв.метр</option>
                <option>килограмм</option>
                <option>куб.метр</option>
                <option>литр</option>
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
                <option>paket</option>
                <option>автоцистерна</option>
                <option>баллон</option>
                <option>банка</option>
                <option>бочки</option>
                <option>ж/д цистерны</option>
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
                <option>шт</option>
                <option>грамм</option>
                <option>кв.метр</option>
                <option>килограмм</option>
                <option>куб.метр</option>
                <option>литр</option>
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
              <input type="text" class="form-control" value="40000">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="form-group row">
            <label  class="col-4 col-form-label">Денежная единица</label>
            <div class="col-8">
              <select class="form-control">
                <option selected>сум</option>
                <option>доллар</option>
                <option>евро</option>
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
                <option>аккредетив</option>
                <option>Банковская гарантия</option>
                <option>Страховой полис</option>
                <option>Гарантия доверителя</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="form-group row">
            <label  class="col-4 col-form-label">Вид сделки</label>
            <div class="col-8">
              <select class="form-control">
                <option>Спот</option>
                <option>Фьючерс</option>
                <option selected>Форвард</option>
                <option>Опцион</option>
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
              <input type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="form-group row">
            <label  class="col-4 col-form-label">Место нахождения товара (узб)</label>
            <div class="col-8">
              <input type="text" class="form-control">
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
                <option>США</option>
                <option>Великобритания</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="form-group row">
            <label  class="col-4 col-form-label">Базис поставки</label>
            <div class="col-8">
              <select class="form-control">
                <option>-</option><option selected>EXW - самовывоз</option><option>FCA</option><option>FAS</option><option>FOB</option><option>CFR</option><option>CIF</option><option>CPT</option><option>CIP</option><option>DDP</option><option>DAP</option><option>DAT</option>
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
                <input type="text" class="form-control">
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
                <input type="text" class="form-control">
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
              <input type="text" class="form-control" value="100">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="form-group row">
            <label  class="col-4 col-form-label">Количество</label>
            <div class="col-8">
              <input type="text" class="form-control" value="10">
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
                <option>1</option>
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
        <div class="col">
          <div class="form-group row">
            <label  class="col-8 col-form-label">% залога с покупателя</label>
            <div class="col-4">
              <select class="form-control">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option selected>3</option>
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
            <label  class="col-8 col-form-label">Понижение цены не менее,%</label>
            <div class="col-4">
              <input type="text" class="form-control" value="0">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="form-group row">
            <label  class="col-8 col-form-label">Повышение цены не более,%</label>
            <div class="col-4">
              <input type="text" class="form-control" value="0">
            </div>
          </div>
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