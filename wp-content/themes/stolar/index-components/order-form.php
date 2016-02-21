<div class="flex order-form">
    <div class="container">
        <form class="form-horizontal" id="order-form" method="post"
              action="<?php bloginfo('template_url'); ?>/index-components/post.php">
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
                               class="form-control input-md"
                               pattern="^[а-яА-Я ]{4,50}$">
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <!-- Text input-->
                <div class="form-group row">
                    <label class="col-md-3 control-label col-md-offset-1" for="name">Как к вам обращаться?</label>
                    <div class="col-md-7">
                        <input id="name" name="name" type="text" placeholder="Имя\Фамилия\Отчество, или всё вместе"
                               class="form-control input-md" required
                               pattern="^[а-яА-Я ]{4,50}$">
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <!-- Text input-->
                <div class="form-group row">
                    <label class="col-md-3 control-label col-md-offset-1" for="email">E-mail:</label>
                    <div class="col-md-7">
                        <input id="email" name="email" type="email" placeholder="example@gmail.com"
                               class="form-control input-md" required>
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <!-- Text input-->
                <div class="form-group row">
                    <label class="col-md-3 control-label col-md-offset-1" for="phoneNumber">*Номер Телефона*:</label>
                    <div class="col-md-7">
                        <input id="phone" name="phone" type="tel" placeholder="8 0ХX XXX XX XX"
                               class="form-control input-md">
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <!-- Textarea -->
                <div class="form-group row">
                    <label class="col-md-3 control-label col-md-offset-1" for="problemFull">*Подробное
                        описание*:</label>
                    <div class="col-md-7">
                        <textarea class="form-control" id="problemFull" name="message"
                                  placeholder="Возможно, у вашего заказа существуют некоторые тонкости?..."></textarea>
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <!-- Button -->
                <button type="submit"
                        class="btn btn-primary btn-lg col-xs-12 col-md-6 col-md-offset-3 paddingToFooter">
                    Отправить заявку!
                </button>
            </fieldset>
        </form>
    </div>
</div>
<hr>