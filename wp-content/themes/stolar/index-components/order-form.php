<div class="flex order-form">
    <div class="container">
        <form class="form-horizontal">
            <fieldset>
                <!-- Form Name -->
                <legend>Форма заказа</legend>
                <div class="form-group row">
                    <div class="col-md-11 col-ms-offset-1">
                        <p>*Необязательные поля помечены звёздочкой(*)</p>
                    </div>
                </div>


                <!-- Text input-->
                <div class="form-group row">
                    <label class="col-md-3 control-label col-md-offset-1" for="problem">*Ваша проблема*:</label>
                    <div class="col-md-7">
                        <input id="problem" name="problem" type="text" placeholder="Краткое описание:"
                               class="form-control input-md" required="">
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <!-- Text input-->
                <div class="form-group row">
                    <label class="col-md-3 control-label col-md-offset-1" for="name">Как к вам обращаться?</label>
                    <div class="col-md-7">
                        <input id="name" name="name" type="text" placeholder="Имя\Фамилия\Отчество, или всё вместе"
                               class="form-control input-md" required="">
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <!-- Text input-->
                <div class="form-group row">
                    <label class="col-md-3 control-label col-md-offset-1" for="email">*E-mail*:</label>
                    <div class="col-md-7">
                        <input id="email" name="email" type="text" placeholder="example@gmail.com"
                               class="form-control input-md">
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <!-- Text input-->
                <div class="form-group row">
                    <label class="col-md-3 control-label col-md-offset-1" for="phoneNumber">Номер Телефона:</label>
                    <div class="col-md-7">
                        <input id="phoneNumber" name="phoneNumber" type="text" placeholder="+375..."
                               class="form-control input-md" required="">
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <!-- Textarea -->
                <div class="form-group row">
                    <label class="col-md-3 control-label col-md-offset-1" for="problemFull">*Подробное
                        описание*:</label>
                    <div class="col-md-7">
                        <textarea class="form-control" id="problemFull" name="problemFull"
                                  placeholder="Возможно, у вашего заказа существуют некоторые тонкости?..."></textarea>
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <!-- Button -->
                <button type="button"
                        class="btn btn-info btn-lg col-xs-12 col-md-6 col-md-offset-3 paddingToFooter">
                    Отправить заявку!
                </button>
            </fieldset>
        </form>
    </div>
</div>