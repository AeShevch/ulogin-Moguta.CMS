<?php
/**
 * Plugin Name: uLogin - виджет авторизации через социальные сети
 * Plugin URI:  http://ulogin.ru/
 * Description: uLogin — это инструмент, который позволяет пользователям получить единый доступ к различным
 * Интернет-сервисам без необходимости повторной регистрации, а владельцам сайтов — получить дополнительный приток
 * клиентов из социальных сетей и популярных порталов (Google, Яндекс, Mail.ru, ВКонтакте, Facebook и др.)
 * Version:     2.0.0
 * Author:      uLogin
 * Author URI:  http://ulogin.ru/
 * License:     GPL2
 */
?>
<div class="widget-table-body">
	<div class="wrapper-ulogin-setting">
		<div class="row">
			<div class="large-5 columns">
				<div class="row sett-line">
					<div class="small-12 medium-5 columns">
						<label class="middle with-help"><?php echo $lang['ULOGINID1'] ?><span class="question__wrap" tooltip="<?php echo $lang['ULOGINID1_TEXT']; ?>" flow="leftUp"><i class="fa fa-question-circle" aria-hidden="true" from="uloginid1"></i></span></label>
					</div>
					<div class="small-12 medium-7 columns">
						<input type="text" class="settings-input large" name="uloginid1" id="uloginid1" value="<?php echo $options['uloginid1'] ?>">
					</div>
				</div>
				<div class="row sett-line">
					<div class="small-12 medium-5 columns">
						<label class="middle with-help"><?php echo $lang['ULOGINID2'] ?><span class="question__wrap" tooltip="<?php echo $lang['ULOGINID2_TEXT']; ?>" flow="leftUp"><i class="fa fa-question-circle" aria-hidden="true" from="uloginid2"></i></span></label>
					</div>
					<div class="small-12 medium-7 columns">
						<input type="text" class="settings-input large" name="uloginid2" id="uloginid2" value="<?php echo $options['uloginid2'] ?>">
					</div>
				</div>
				<div class="row">
					<div class="text-left">
						<button id="ulogin-save" class="base-setting-save save-button save-settings button success" title="<?php echo $lang['SAVE_MODAL']; ?>">
							<span><?php echo $lang['SAVE']; ?></span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<style>

.widget-table-body label {
	border-bottom: 1px dashed #ccc;
}

</style>