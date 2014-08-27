<html>
<body>
Lista de entradas:
<ul>
<?php foreach($entries as $entry){ ?>
<li><a href="http://docencia.eit.udp.cl/~18462241/swisstool/index.php/Blog/byid/<?php echo $entry->id ?>"><?php echo $entry->title ?></a></li>
<?php } ?>
</ul>
</body>
</html>

