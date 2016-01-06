<div class="flex blockWithForm" style="background-color: #F3EFE0; color: gray;">
    <div class="container">
        <form class="form-horizontal">
            <fieldset>

                <!-- Form Name -->
                <legend>Форма заказа</legend>
                <div class="form-group">
                    <p>*Необязательные поля помечены звёздочкой(*)</p>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="problem">*Ваша проблема*:</label>
                    <div class="col-md-7">
                        <input id="problem" name="problem" type="text" placeholder="Краткое описание:"
                               class="form-control input-md" required="">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="name">Как к вам обращаться?</label>
                    <div class="col-md-7">
                        <input id="name" name="name" type="text" placeholder="Имя\Фамилия\Отчество, или всё вместе"
                               class="form-control input-md" required="">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="email">*E-mail*:</label>
                    <div class="col-md-7">
                        <input id="email" name="email" type="text" placeholder="example@gmail.com"
                               class="form-control input-md">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="phoneNumber">Номер Телефона:</label>
                    <div class="col-md-7">
                        <input id="phoneNumber" name="phoneNumber" type="text" placeholder="+375..."
                               class="form-control input-md" required="">
                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="problemFull">*Подробное описание*:</label>
                    <div class="col-md-7">
                        <textarea class="form-control area" id="problemFull" name="problemFull"></textarea>
                    </div>
                </div>

                <!-- Button -->
                <button type="button"
                        class="btn btn-info btn-lg col-sm-12 col-md-7 col-md-offset-3 paddingToFooter">
                    Отправить заявку!
                </button>
            </fieldset>
        </form>
    </div>
</div>