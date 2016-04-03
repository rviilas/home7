<?php
$guitars= array(
	array('model'=>'PRS Custom22', 'color'=>'Gold Top', 'pups'=>'PRS 58/15', 'manufacturer'=>'Paul Reed Smith', 'link'=>'http://www.prsguitars.com/custom24/'),
	array('model'=>'PRS Custom24', 'color'=>'Whale Blue',  'pups'=>'PRS 85/15', 'manufacturer'=>'Paul Reed Smith', 'link'=>'http://www.prsguitars.com/p22/'),
	array('model'=>'Nick Johnston Traditional', 'color'=>'Atomic Silver', 'pups'=>'Seymour Duncan Texas Hot', 'manufacturer'=>'Shecter', 'link'=>'http://www.schecterguitars.com/international/custom-shop/usa-product-collection/nick-johnston-traditional-detail'),
	array('model'=>'Suhr Classic Pro', 'color'=>'Black and white', 'pups'=>'SSV', 'manufacturer'=>'Suhr', 'link'=>'http://www.suhr.com/guitars/Classic-Pro/'),	
	array('model'=>'Ibanez JS2410', 'color'=>'Muscle Car Orange', 'pups'=>'Satch Track and MoJoe', 'manufacturer'=>'Ibanez', 'link'=>'http://www.ibanez.co.jp/products/eg_page15.php?year=2015&area_id=2&cat_id=1&series_id=27&data_id=235&color=CL01'),
);
	
foreach($guitars as $value) {	
	include('guitar.html');
}
?>