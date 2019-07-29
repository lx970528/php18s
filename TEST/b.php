<?php

	$arr = array(
		 0=>array('name'=>'大宝剑','price'=>'188','img'=>'1.jpg'),
		 1=>array('name'=>'小宝剑','price'=>'388','img'=>'1.jpg'),
		 2=>array('name'=>'中宝剑','price'=>'588','img'=>'1.jpg'),
		 3=>array('name'=>'老宝剑','price'=>'888','img'=>'1.jpg'),
	);
	echo  '<table border="1" width="800" align="center">';
	echo  '<tr>';
		echo '<td>编号</td>';
		echo '<td>名称</td>';
		echo '<td>图片</td>';
		echo '<td>价格</td>';
	echo  '</tr>';
	foreach($arr as $key=>$value){
		//echo $value['name'];
		//echo $value['img'];
		echo '<tr>';
		echo '<td>'.$key.'</td>';
		echo '<td>'.$value['name'].'</td>';
		echo '<td><img src="./'.$value['img'].'" width="150px"/></td>';
		echo '<td>￥'.$value['price'].'</td>';
		echo '</tr>';
	}
	echo '</table>';