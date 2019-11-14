/**
 *  Plugin Name: uLogin - виджет авторизации через социальные сети
 * Plugin URI:  http://ulogin.ru/
 * Description: uLogin — это инструмент, который позволяет пользователям получить единый доступ к различным Интернет-сервисам без необходимости повторной регистрации, а владельцам сайтов — получить дополнительный приток клиентов из социальных сетей и популярных порталов (Google, Яндекс, Mail.ru, ВКонтакте, Facebook и др.)
 * Version:     2.0.0
 * Author:      uLogin
 * Author URI:  http://ulogin.ru/
 * License:     GPL2
 */

var uloginAuthModule = (function () {

    return {
        lang: [], // локаль плагина
        init: function () {

            // установка локали плагина
            admin.ajaxRequest({
                    mguniqueurl: "action/seLocalesToPlug",
                    pluginName: 'ulogin'
                },
                function (response) {
                    uloginAuthModule.lang = response.data;
                }
            );

            // Сохраняет базовые настроки
            $('.admin-center').on('click', '#ulogin-save', function () {
                var data = {};
                data.uloginid1 = $("input[name=uloginid1]").val();
                data.uloginid2 = $("input[name=uloginid2]").val();

                $.ajax({
                    type: "POST",
                    url: mgBaseDir + "/ajaxrequest",
                    dataType: 'json',
                    data: {
                        mguniqueurl: "action/saveBaseOption", // действия для выполнения на сервере
                        pluginHandler: 'ulogin',
                        data: {
                            uloginid1: data.uloginid1,
                            uloginid2: data.uloginid2
                        }
                    },
                    success: function (response) {
                        if (response.status != 'error') {
                            admin.indication(response.status, response.msg);
                        }
                    }
                });

            });

        }
    }
})();

uloginAuthModule.init();