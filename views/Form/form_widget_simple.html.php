<?
$class = isset($class) ? $class : '';
$class .= (!empty($attr['class']) ? ' ' . $attr['class'] : '');

if(!isset($type) || 'file' != $type) {
	$attr['class'] = trim($class . ' ' . $view['form']->block($form, 'form_widget_class'));
}

$addonPreHtml = $view['form']->block($form, 'form_widget_addon', ['attr' => $input_addon['pre'] ?? null]);
$addonPostHtml = $view['form']->block($form, 'form_widget_addon', ['attr' => $input_addon['post'] ?? null]);

if($addonPreHtml || $addonPostHtml) {
?>
<div class="input-group <?= $input_addon['size'] ?? '' ?>"><?= $addonPreHtml ?>
<?
}
	
// add any icon specified to the form
$inputIcon = $view['form']->block($form, 'form_widget_icon', ['attr' => $attr]);
if($inputIcon) {
	echo $inputIcon;
}
?>
	<input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes', ['attr' => $attr]) ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />
<?	if($inputIcon) {	?>
</div>
<?	}	?>
<?php if (isset($help)) : ?>
	<span class="help-block"><?php echo $view->escape($help) ?></span>
<?php endif ?>

<?
if($addonPreHtml || $addonPostHtml) {
?>
	<?= $addonPostHtml ?></div>
<?
}
?>
