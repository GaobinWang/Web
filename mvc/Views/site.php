<html>
<head></head>
<body>
<?php foreach ($models as $id => $name) : ?>
	<a href="http://localhost?site/test&id=<?= $id?>">
		<?= $name;?>
	</a>
<?php endforeach;?>
</body>
</html>


