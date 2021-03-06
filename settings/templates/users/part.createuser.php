<?php
	$ppe_url = \OCP\Config::getSystemValue('password_policy_faq', '');
?>
<div id="controls">
	<form id="newuser" autocomplete="off">
		<input id="newusername" type="text"
			placeholder="<?php p($l->t('Username'))?>"
			autocomplete="off" autocapitalize="off" autocorrect="off" />
		<input
			type="password" id="newuserpassword"
			placeholder="<?php p($l->t('Password'))?>"
			autocomplete="off" autocapitalize="off" autocorrect="off" />
		<select
			class="groupsselect" id="newusergroups" data-placeholder="groups"
			title="<?php p($l->t('Groups'))?>" multiple="multiple">
			<?php foreach($_["adminGroup"] as $adminGroup): ?>
				<option value="<?php p($adminGroup['name']);?>"><?php p($adminGroup['name']); ?></option>
			<?php endforeach; ?>
			<?php foreach($_["groups"] as $group): ?>
				<option value="<?php p($group['name']);?>"><?php p($group['name']);?></option>
			<?php endforeach;?>
		</select>
		<input type="submit" class="button" value="<?php p($l->t('Create'))?>" />
	</form>
	<span id="ppe_warning" style="color: red; font-weight: bold">
		<?php
			print_unescaped($l->t("Warning : <a href=\"")) ;
			print_unescaped($ppe_url) ;
			print_unescaped($l->t("\">password constraints</a> must be respected!"));
		?>
	</span>
	<?php if((bool)$_['recoveryAdminEnabled']): ?>
	<div class="recoveryPassword">
	<input id="recoveryPassword"
		   type="password"
		   placeholder="<?php p($l->t('Admin Recovery Password'))?>"
		   title="<?php p($l->t('Enter the recovery password in order to recover the users files during password change'))?>"
		   alt="<?php p($l->t('Enter the recovery password in order to recover the users files during password change'))?>"/>
	</div>
	<?php endif; ?>
	<form autocomplete="off" id="usersearchform">
		<input type="text" class="input userFilter" placeholder="<?php p($l->t('Search Users and Groups')); ?>" />
	</form>
</div>
