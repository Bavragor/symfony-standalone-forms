<?php if (count($errors) > 0): ?>
<?	if (isset($form['parent']) && $form['parent']) { ?><span class="help-block"><? } else { ?><div class="alert alert-danger"><? } ?>
	<ul class="list-unstyled">

		<?php foreach ($errors as $fieldName => $errorMsg): ?>
			<li><span class="glyphicon glyphicon-exclamation-sign"></span> <?php echo $fieldName ?> - <?php echo $errorMsg ?></li>
		<?php endforeach; ?>
	</ul>
<?	if (isset($form['parent']) && $form['parent']) { ?></span><? } else { ?></div><? } ?>
<?php endif ?>
