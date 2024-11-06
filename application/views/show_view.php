<?php
echo doctype('html5');
echo nbs(10);
echo heading('Software Engineering', 1, 'id="headername"' );
echo br(5);

$image = array('width' => '200', 'src' => 'https://files-world.thaipbs.or.th/_471e69c70a.jpg', 'alt' => 'Moo Deng');

echo img($image);

$list = array(
	'red',
	'blue',
	'geen',
	'yellow',
);

echo ul($list);
echo ol($list);