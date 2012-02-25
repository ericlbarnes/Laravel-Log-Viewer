<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Log Viewer</title>
		<link href="<?php echo Bundle::assets('logviewer'); ?>style.css?1" rel="stylesheet" type="text/css">
	</head>

	<body>

		<header class="container-fluid">
			<h1>Laravel Log Viewer</h1>
		</header>

		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span3">
					<div class="well sidebar-nav">
						<ul class="nav nav-list">
							<li class="nav-header">Log Files</li>
							<?php if ($files): ?>
								<?php foreach ($files as $file): ?>
									<?php $file = str_replace('.log', '', $file); ?>
									<li><a href="<?php echo URL::to(Bundle::get('logviewer.handles').'?date='.$file) ?>"><?php echo $file; ?></a></li>
								<?php endforeach ?>
							<?php endif ?>
						</ul>
					</div><!--/.well -->
				</div><!--/span-->
				<div class="span9">
					<div class="well main">
							<ul>
							<?php foreach ($contents as $key => $item): ?>
								<?php if (strpos($item, 'ERROR') !== FALSE): ?>
									<li class="error"><?php echo $item ?></li>
								<?php elseif ($item != ''): ?>
									<li class="info"><?php echo $item ?></li>
								<?php endif ?>
							<?php endforeach ?>
							</ul>
					</div><!--/row-->
				</div><!--/span-->
			</div><!--/row-->
		</div>

		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.0.0/bootstrap.min.js"></script>
	</body>
</html>