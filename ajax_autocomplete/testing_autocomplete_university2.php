<?php
$db = mysqli_connect("localhost", "root", "mysql", "autocomplete");
if (!empty($_GET["prev_uni_keyword"])) {
	$sql = 'select * from university_list where university like "'.$_GET["prev_uni_keyword"].'%"';
	$res = mysqli_query($db, $sql);
	$print = '<ul id="prev_uni">';
	if($res){
		while($row = mysqli_fetch_assoc($res)){
			$print .= '<li onclick="select_prev_uni(\''.$row['university'].'\')" >'.$row['university'].'</li>';
		}
	}
	$print	 .= '</ul>';
	echo $print;
} else {
	$sql = 'select * from university_list';
	$res = mysqli_query($db, $sql);
	$print = '<ul id="prev_uni">';
	if($res){
		while($row = mysqli_fetch_assoc($res)){
			$print .= '<li onclick="select_prev_uni(\''.$row['university'].'\')" >'.$row['university'].'</li>';
		}
	}
	$print	 .= '</ul>';
	echo $print;
}
?>
