<?

$text = $attr['text'] ?? null;
$icon = $attr['icon'] ?? null;

if(!$text && !$icon) {
	return null;
}

?>
<span class="input-group-addon"><?= $text ?><?= $icon ? '<i class="' . $icon . '"></i>' : '' ?></span>
<?php
