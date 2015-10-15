<div class="<?php echo $data['align']; ?>">
	<?php if ($NeoFrag->config->dungeon_logo): ?>
		<a href="<?php echo url(); ?>"><img src="<?php echo path($NeoFrag->config->dungeon_logo); ?>" class="header-logo" alt="" /></a>
	<?php else: ?>
		<h2 class="site-title"<?php if (!empty($data['color-title'])) echo 'style="color: '.$data['color-title'].'"'; ?>><?php echo $data['title'] ?: $NeoFrag->config->nf_name; ?></h2>
		<h5 class="site-description"<?php if (!empty($data['color-description'])) echo ' style="color: '.$data['color-description'].'"'; ?>><?php echo $data['description'] ?: $NeoFrag->config->nf_description; ?></h5>
	<?php endif; ?>
</div>