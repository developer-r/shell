<div class="basket" id="basket" style="display: none;">
    <div class="form_close form_close__right formCloseRight"><a class="form_close--catalog fancybox-close-small"
                                                                data-fancybox-close="" title="Close">
            <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39">
                <path fill="#525252" fill-rule="nonzero"
                      d="M19.5 17.373L36.873 0 39 2.127 21.627 19.5 39 36.873 36.873 39 19.5 21.627 2.127 39 0 36.873 17.373 19.5 0 2.127 2.127 0 19.5 17.373z"></path>
            </svg>
        </a></div>
    <div class="fancy">
        <div class="fancy-inner">
            <div class="catalog-double__left" id="basketquickorderLeft">
                <div id="basketquickorder" style="display: none;">
                    <div class="form_close" id="basketquickorderCloseLeft"><a
                            class="form_close--catalog fancybox-close-small" title="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39">
                                <path fill="#ffffff" fill-rule="nonzero"
                                      d="M19.5 17.373L36.873 0 39 2.127 21.627 19.5 39 36.873 36.873 39 19.5 21.627 2.127 39 0 36.873 17.373 19.5 0 2.127 2.127 0 19.5 17.373z"></path>
                            </svg>
                        </a></div>
                    <h3>Оформление заказа</h3>
                    <div class="basket-modal__wrapper" data-simplebar="init">
                        <div class="basket-modal__wrapper__left-bg"></div>
                        <div class="simplebar-track vertical" style="visibility: hidden;">
                            <div class="simplebar-scrollbar"></div>
                        </div>
                        <div class="simplebar-track horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar"></div>
                        </div>
                        <div class="simplebar-scroll-content" style="padding-right: 17px; margin-bottom: -34px;">
                            <div class="simplebar-content">
                                <div class="basketquickorder-modal">
                                    <div class="modal_wrapper">
                                        <div class="modal_right">
                                            <div class="modal_content">
                                                <div class="tabs"><input class="tabs__tab" type="radio" id="tabs__tab1"
                                                                         name="tabstab" checked="checked"/><label
                                                        class="tabs__title tabs__title__left" for="tabs__tab1">Физ.
                                                        лицо</label>
                                                    <div class="tabs__text">
                                                        <form id="basketF" data-parsley-validate="" method="get"
                                                              action=""><label class="txt-input" for="name9"><span
                                                                    class="placeholder">Ваше имя *</span><span
                                                                    class="txt-input__wrap"><input class="txt-input__field"
                                                                                                   type="text"
                                                                                                   data-parsley-required-message="Введите Ваше имя"
                                                                                                   required="" name="name9"
                                                                                                   id="name9"/><a
                                                                        class="input-clear" href="#"></a></span></label><label
                                                                class="txt-input" for="email9"><span
                                                                    class="placeholder">E-mail</span><span
                                                                    class="txt-input__wrap"><input class="txt-input__field"
                                                                                                   id="email9" name="email9"
                                                                                                   type="email"
                                                                                                   data-parsley-required-message="Введите Ваш e-mail"
                                                                                                   required=""/><a
                                                                        class="input-clear" href="#"></a></span></label><label
                                                                class="txt-input form_input" for="phone9"><span
                                                                    class="placeholder">Телефон</span><span
                                                                    class="txt-input__wrap"><input
                                                                        class="txt-input__field phone" id="phone9" name="phone9"
                                                                        type="text"
                                                                        data-parsley-required-message="Введите номер телефона"
                                                                        required="" data-parsley-required="true"
                                                                        data-parsley-trigger="change"/><a class="input-clear"
                                                                                                          href="#"></a></span></label><label
                                                                class="txt-input" for="address9"><span
                                                                    class="placeholder">Адрес доставки</span><span
                                                                    class="txt-input__wrap"><input class="txt-input__field"
                                                                                                   type="text" id="address9"
                                                                                                   data-parsley-required-message="Введите Ваш адрес"
                                                                                                   name="address9"
                                                                                                   required=""/><a
                                                                        class="input-clear" href="#"></a></span></label><label
                                                                class="textarea-input" for="comment9">
                                                                <div class="placeholder">Комментарий</div>
                                                                <div class="textarea-input__wrap"><textarea
                                                                        class="textarea-input__field" id="comment9"
                                                                        data-parsley-required-message="Введите комментарий"
                                                                        name="comment9" required=""></textarea><a
                                                                        class="input-clear" href="#"></a><span
                                                                        class="resize"></span></div>
                                                            </label><label class="select delivery-method" for="select1">
                                                                <div class="placeholder">Способ доставки *</div>
                                                                <div class="select-wrap"><select
                                                                        class="select__field comment" onclick=""
                                                                        name="select1" id="select1"
                                                                        data-parsley-required-message="Введите способ доставки"
                                                                        required="">
                                                                        <option selected="selected" disabled="disabled">
                                                                            Выберите
                                                                        </option>
                                                                        <option>Slow</option>
                                                                        <option>Medium</option>
                                                                        <option>Fast</option>
                                                                        <option>Faster</option>
                                                                    </select></div>
                                                                <div class="select__comment">склад работает с 08.00 до 17.00
                                                                    с Пн по Пт
                                                                </div>
                                                            </label><label class="select" for="select2">
                                                                <div class="placeholder">Способ оплаты *</div>
                                                                <div class="select-wrap"><select class="select__field"
                                                                                                 onclick="" name="select2"
                                                                                                 id="select2"
                                                                                                 data-parsley-required-message="Введите способ оплаты"
                                                                                                 required="">
                                                                        <option selected="selected" disabled="disabled">
                                                                            Выберите
                                                                        </option>
                                                                        <option>Slow</option>
                                                                        <option>Medium</option>
                                                                        <option>Fast</option>
                                                                        <option>Faster</option>
                                                                    </select></div>
                                                            </label>
                                                            <div class="modal-form_buttons">
                                                                <div class="txt-input__checkbox"><label
                                                                        class="cb-input cb-input__subscription"
                                                                        for="agree9"><input class="cb-input__checkbox"
                                                                                            id="agree9" type="checkbox"
                                                                                            data-parsley-checkmin="1"
                                                                                            data-parsley-required-message=""
                                                                                            required="" checked=""
                                                                                            name="agree9"
                                                                                            data-parsley-multiple="ch-o"/><span
                                                                            class="cb-input__check"></span><span
                                                                            class="cb-input__label">Я даю свое
<a data-fancybox="" data-src="#policy" href="javascript:;">согласие на обработку персональных данных</a></span></label>
                                                                </div>
                                                                <button class="button button_red" type="submit"><span>Подтвердить заказ</span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <input class="tabs__tab" type="radio" id="tabs__tab2"
                                                           name="tabstab"/><label class="tabs__title tabs__title__right"
                                                                                  for="tabs__tab2">Юр. лицо</label>
                                                    <div class="tabs__text">
                                                        <form id="basketY" data-parsley-validate="" method="get"
                                                              action=""><label class="txt-input" for="name10"><span
                                                                    class="placeholder">Название компании *</span><span
                                                                    class="txt-input__wrap"><input class="txt-input__field"
                                                                                                   type="text"
                                                                                                   data-parsley-required-message="Введите название организации"
                                                                                                   required="" name="name10"
                                                                                                   id="name10"/><a
                                                                        class="input-clear" href="#"></a></span></label><label
                                                                class="txt-input" for="dog10"><span class="placeholder">Номер договора</span><span
                                                                    class="txt-input__wrap"><input class="txt-input__field"
                                                                                                   type="text"
                                                                                                   data-parsley-required-message="Введите номер договора"
                                                                                                   required="" name="dog10"
                                                                                                   id="dog10"/><a
                                                                        class="input-clear" href="#"></a></span></label><label
                                                                class="txt-input" for="inn10"><span class="placeholder">ИНН</span><span
                                                                    class="txt-input__wrap"><input class="txt-input__field"
                                                                                                   type="text"
                                                                                                   data-parsley-required-message="Введите ИНН"
                                                                                                   required="" name="inn10"
                                                                                                   id="inn10"/><a
                                                                        class="input-clear" href="#"></a></span></label><label
                                                                class="txt-input" for="address10"><span
                                                                    class="placeholder">Юридический адрес</span><span
                                                                    class="txt-input__wrap"><input class="txt-input__field"
                                                                                                   type="text"
                                                                                                   data-parsley-required-message="Введите юридический адрес"
                                                                                                   id="address10"
                                                                                                   name="address10"
                                                                                                   required=""/><a
                                                                        class="input-clear" href="#"></a></span></label><label
                                                                class="txt-input" for="name101"><span
                                                                    class="placeholder">Контактное лицо *</span><span
                                                                    class="txt-input__wrap"><input class="txt-input__field"
                                                                                                   type="text"
                                                                                                   data-parsley-required-message="Введите контактное лицо"
                                                                                                   required=""
                                                                                                   name="name101"
                                                                                                   id="name101"/><a
                                                                        class="input-clear" href="#"></a></span></label><label
                                                                class="txt-input" for="email10"><span
                                                                    class="placeholder">E-mail</span><span
                                                                    class="txt-input__wrap"><input class="txt-input__field"
                                                                                                   id="email10"
                                                                                                   name="email10"
                                                                                                   type="email"
                                                                                                   data-parsley-required-message="Введите e-mail контактного лица"
                                                                                                   required=""/><a
                                                                        class="input-clear" href="#"></a></span></label><label
                                                                class="txt-input form_input" for="phone10">
                                                                <div class="placeholder">Телефон</div>
                                                                <div class="txt-input__wrap"><input
                                                                        class="txt-input__field phone" id="phone10"
                                                                        name="phone10" type="text"
                                                                        data-parsley-required-message="Введите номер телефона"
                                                                        required="" data-parsley-required="true"
                                                                        data-parsley-trigger="change"/><a
                                                                        class="input-clear" href="#"></a></div>
                                                            </label><label class="select" for="address101">
                                                                <div class="placeholder">Адрес доставки *</div>
                                                                <div class="select-wrap"><select class="select__field"
                                                                                                 name="address101"
                                                                                                 id="address101"
                                                                                                 data-parsley-required-message="Введите способ доставки"
                                                                                                 required="">
                                                                        <option selected="selected" disabled="disabled">
                                                                            Выберите
                                                                        </option>
                                                                        <option>Slow</option>
                                                                        <option>Medium</option>
                                                                        <option>Fast</option>
                                                                        <option>Faster</option>
                                                                    </select></div>
                                                            </label><label class="textarea-input" for="comment10">
                                                                <div class="placeholder">Комментарий</div>
                                                                <div class="txt-input__wrap"><textarea
                                                                        class="textarea-input__field" id="comment10"
                                                                        name="comment10"
                                                                        data-parsley-required-message="Введите комментарий"
                                                                        required=""></textarea><a class="input-clear"
                                                                                                  href="#"></a><span
                                                                        class="resize"></span></div>
                                                            </label><label class="select" for="select3">
                                                                <div class="placeholder">Способ доставки *</div>
                                                                <div class="select-wrap"><select class="select__field"
                                                                                                 onclick="" name="select3"
                                                                                                 id="select3"
                                                                                                 data-parsley-required-message="Введите способ доставки"
                                                                                                 required="">
                                                                        <option selected="selected" disabled="disabled">
                                                                            Выберите
                                                                        </option>
                                                                        <option>Slow</option>
                                                                        <option>Medium</option>
                                                                        <option>Fast</option>
                                                                        <option>Faster</option>
                                                                    </select></div>
                                                                <div class="select__comment">склад работает с 08.00 до 17.00
                                                                    с Пн по Пт
                                                                </div>
                                                            </label><label class="select" for="select4">
                                                                <div class="placeholder">Способ оплаты *</div>
                                                                <div class="select-wrap"><select class="select__field"
                                                                                                 onclick="" name="select4"
                                                                                                 id="select4"
                                                                                                 data-parsley-required-message="Введите способ оплаты"
                                                                                                 required="">
                                                                        <option selected="selected" disabled="disabled">
                                                                            Выберите
                                                                        </option>
                                                                        <option>Slow</option>
                                                                        <option>Medium</option>
                                                                        <option>Fast</option>
                                                                        <option>Faster</option>
                                                                    </select></div>
                                                            </label>
                                                            <div class="modal-form_buttons">
                                                                <div class="txt-input__checkbox"><label
                                                                        class="cb-input cb-input__subscription"
                                                                        for="agree10"><input class="cb-input__checkbox"
                                                                                             id="agree10"
                                                                                             type="checkbox"
                                                                                             data-parsley-checkmin="1"
                                                                                             data-parsley-required-message=""
                                                                                             required="" checked=""
                                                                                             name="agree10"
                                                                                             data-parsley-multiple="ch-o"/><span
                                                                            class="cb-input__check"></span><span
                                                                            class="cb-input__label">Я даю свое
<a data-fancybox="" data-src="#policy" href="javascript:;">согласие на обработку персональных данных</a></span></label>
                                                                </div>
                                                                <button class="button button_red" type="submit"><span>Подтвердить заказ</span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form class="catalog-double__right" id="basketquickorderRight">
                <div class="basket-modal_bg"></div>
                <h3 class="basket-modal_title-right">Корзина</h3>
                <div class="basket-modal__wrapper" data-simplebar="init">
                    <div class="simplebar-track vertical" style="visibility: hidden;">
                        <div class="simplebar-scrollbar"></div>
                    </div>
                    <div class="simplebar-track horizontal" style="visibility: hidden;">
                        <div class="simplebar-scrollbar"></div>
                    </div>
                    <div class="simplebar-scroll-content" style="padding-right: 17px; margin-bottom: -34px;">
                        <div class="simplebar-content simplebar-content__right">
                            <div class="basket-modal_item">
                                <div class="basket-modal_form basket-form">
                                    <div class="basket-form_row"><a class="basket-form_col" href="#">
                                            <div class="basket-form_img" style="background-image: url('img/1.png');"></div>
                                            <div class="basket-form_content">
                                                <div class="basket-form_title">Helix Ultra 0W-40</div>
                                                <div class="basket-form_price-block">
                                                    <div class="radio_row"><label class="radio_col radio_col_left"><input
                                                                class="radio_input" type="radio" name="liter7" id="liter217"
                                                                checked="checked"/><span>1л</span></label><label
                                                            class="radio_col radio_col_center"><input class="radio_input"
                                                                                                      type="radio"
                                                                                                      name="liter7"
                                                                                                      id="liter227"/><span>2л</span></label><label
                                                            class="radio_col radio_col_right"><input class="radio_input"
                                                                                                     type="radio"
                                                                                                     name="liter7"
                                                                                                     id="liter237"/><span>5л</span></label>
                                                    </div>
                                                    <div class="controlgroup"><label class="ui-controlgroup-label"
                                                                                     for="horizontal-spinner-7"><input
                                                                class="ui-spinner-input" id="horizontal-spinner-7"
                                                                value="1"/></label></div>
                                                    <div class="basket-form_price">= 838 руб.</div>
                                                </div>
                                            </div>
                                            <div class="basket-form_delete"><span
                                                    style="background-image: url('img/delete.png');"></span></div>
                                        </a><a class="basket-form_col" href="#">
                                            <div class="basket-form_img" style="background-image: url('img/2.png');"></div>
                                            <div class="basket-form_content">
                                                <div class="basket-form_title">Helix HX7, 5W-40</div>
                                                <div class="basket-form_price-block">
                                                    <div class="radio_row"><label class="radio_col radio_col_left"><input
                                                                class="radio_input" type="radio" name="liter8" id="liter218"
                                                                checked="checked"/><span>1л</span></label><label
                                                            class="radio_col radio_col_center"><input class="radio_input"
                                                                                                      type="radio"
                                                                                                      name="liter8"
                                                                                                      id="liter228"/><span>2л</span></label><label
                                                            class="radio_col radio_col_right"><input class="radio_input"
                                                                                                     type="radio"
                                                                                                     name="liter8"
                                                                                                     id="liter238"/><span>5л</span></label>
                                                    </div>
                                                    <div class="controlgroup"><label class="ui-controlgroup-label"
                                                                                     for="horizontal-spinner-8"><input
                                                                class="ui-spinner-input" id="horizontal-spinner-8"
                                                                value="1"/></label></div>
                                                    <div class="basket-form_price">= 1000 руб.</div>
                                                </div>
                                            </div>
                                            <div class="basket-form_delete"><span
                                                    style="background-image: url('img/delete.png');"></span></div>
                                        </a><a class="basket-form_col" href="#">
                                            <div class="basket-form_img" style="background-image: url('img/2.png');"></div>
                                            <div class="basket-form_content">
                                                <div class="basket-form_title">Helix HX7, 5W-40</div>
                                                <div class="basket-form_price-block">
                                                    <div class="radio_row"><label class="radio_col radio_col_left"><input
                                                                class="radio_input" type="radio" name="liter9" id="liter219"
                                                                checked="checked"/><span>1л</span></label><label
                                                            class="radio_col radio_col_center"><input class="radio_input"
                                                                                                      type="radio"
                                                                                                      name="liter9"
                                                                                                      id="liter229"/><span>2л</span></label><label
                                                            class="radio_col radio_col_right"><input class="radio_input"
                                                                                                     type="radio"
                                                                                                     name="liter9"
                                                                                                     id="liter239"/><span>5л</span></label>
                                                    </div>
                                                    <div class="controlgroup"><label class="ui-controlgroup-label"
                                                                                     for="horizontal-spinner-9"><input
                                                                class="ui-spinner-input" id="horizontal-spinner-9"
                                                                value="1"/></label></div>
                                                    <div class="basket-form_price">= 1000 руб.</div>
                                                </div>
                                            </div>
                                            <div class="basket-form_delete"><span
                                                    style="background-image: url('img/delete.png');"></span></div>
                                        </a><a class="basket-form_col" href="#">
                                            <div class="basket-form_img" style="background-image: url('img/2.png');"></div>
                                            <div class="basket-form_content">
                                                <div class="basket-form_title">Helix HX7, 5W-40</div>
                                                <div class="basket-form_price-block">
                                                    <div class="radio_row"><label class="radio_col radio_col_left"><input
                                                                class="radio_input" type="radio" name="liter0" id="liter210"
                                                                checked="checked"/><span>1л</span></label><label
                                                            class="radio_col radio_col_center"><input class="radio_input"
                                                                                                      type="radio"
                                                                                                      name="liter0"
                                                                                                      id="liter220"/><span>2л</span></label><label
                                                            class="radio_col radio_col_right"><input class="radio_input"
                                                                                                     type="radio"
                                                                                                     name="liter0"
                                                                                                     id="liter230"/><span>5л</span></label>
                                                    </div>
                                                    <div class="controlgroup"><label class="ui-controlgroup-label"
                                                                                     for="horizontal-spinner-0"><input
                                                                class="ui-spinner-input" id="horizontal-spinner-0"
                                                                value="1"/></label></div>
                                                    <div class="basket-form_price">= 1000 руб.</div>
                                                </div>
                                            </div>
                                            <div class="basket-form_delete"><span
                                                    style="background-image: url('img/delete.png');"></span></div>
                                        </a></div>
                                    <div class="basket-form_subtitle">Предзаказ</div>
                                    <div class="basket-form_row"><a class="basket-form_col" href="#">
                                            <div class="basket-form_img" style="background-image: url('img/1.png');"></div>
                                            <div class="basket-form_content">
                                                <div class="basket-form_title">Helix Ultra 0W-40</div>
                                                <div class="basket-form_text">Нет в наличии. Поступление ожидается
                                                    10.12.2019
                                                </div>
                                                <div class="basket-form_price-block">
                                                    <div class="radio_row"><label class="radio_col radio_col_left"><input
                                                                class="radio_input" type="radio" name="liter3" id="liter123"
                                                                checked="checked"/><span>1л</span></label><label
                                                            class="radio_col radio_col_center"><input class="radio_input"
                                                                                                      type="radio"
                                                                                                      name="liter3"
                                                                                                      id="liter133"/><span>2л</span></label><label
                                                            class="radio_col radio_col_right"><input class="radio_input"
                                                                                                     type="radio"
                                                                                                     name="liter3"
                                                                                                     id="liter143"/><span>5л</span></label>
                                                    </div>
                                                    <div class="controlgroup"><label class="ui-controlgroup-label"
                                                                                     for="horizontal-spinner-3"><input
                                                                class="ui-spinner-input" id="horizontal-spinner-3"
                                                                value="1"/></label></div>
                                                    <div class="basket-form_price">= 838 руб.</div>
                                                </div>
                                            </div>
                                            <div class="basket-form_delete"><span
                                                    style="background-image: url('img/delete.png');"></span></div>
                                        </a><a class="basket-form_col" href="#">
                                            <div class="basket-form_img" style="background-image: url('img/2.png');"></div>
                                            <div class="basket-form_content">
                                                <div class="basket-form_title">Helix HX7, 5W-40</div>
                                                <div class="basket-form_text">Нет в наличии. Поступление ожидается
                                                    17.12.2019
                                                </div>
                                                <div class="basket-form_price-block">
                                                    <div class="radio_row"><label class="radio_col radio_col_left"><input
                                                                class="radio_input" type="radio" name="liter4" id="liter124"
                                                                checked="checked"/><span>1л</span></label><label
                                                            class="radio_col radio_col_center"><input class="radio_input"
                                                                                                      type="radio"
                                                                                                      name="liter4"
                                                                                                      id="liter134"/><span>2л</span></label><label
                                                            class="radio_col radio_col_right"><input class="radio_input"
                                                                                                     type="radio"
                                                                                                     name="liter4"
                                                                                                     id="liter144"/><span>5л</span></label>
                                                    </div>
                                                    <div class="controlgroup"><label class="ui-controlgroup-label"
                                                                                     for="horizontal-spinner-4"><input
                                                                class="ui-spinner-input" id="horizontal-spinner-4"
                                                                value="1"/></label></div>
                                                    <div class="basket-form_price">= 1000 руб.</div>
                                                </div>
                                            </div>
                                            <div class="basket-form_delete"><span
                                                    style="background-image: url('img/delete.png');"></span></div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="basket-form_total-row">
                    <div class="basket-form_total-col">
                        <div class="basket-form_total-title">Итого</div>
                        <div class="basket-form_total-text">29350<span>руб.</span></div>
                    </div>
                    <div class="basket-form_buttons">
                        <div class="button button_red" id="basketquickorderbutton" onclick="">
                            <span>Оформить заказ</span></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>