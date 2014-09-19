<?php
// ブログページ
$dateStr = null;
if (isset($post)) {
	$dateStr = ($post['BlogPost']['modified']);
	if (!$dateStr) $dateStr = $post['BlogPost']['created'];
}
?>
<?php if ($dateStr): ?>
<meta name="date" content="<?php echo date(DATE_RFC2822, strtotime($dateStr));?>" />
<?php endif; ?>