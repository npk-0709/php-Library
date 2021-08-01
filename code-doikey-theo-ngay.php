<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
$today=date('Y-m-d H:i:s');
$weekday = date("l");
$ngay = date("d");
$thang = date("m");
$gio=date('H');
$phut=date('i');
$weekday = strtolower($weekday);switch($weekday) {case 'monday':$weekday = "\033[1;33mThứ\033[1;36m Hai";break;case 'tuesday':$weekday = "\033[1;33mThứ\033[1;36m Ba";break;case 'wednesday':$weekday = "\033[1;33mThứ \033[1;36mTư";break;case 'thursday':$weekday = "\033[1;33mThứ \033[1;36mNăm";break;case 'friday':$weekday = "\033[1;33mThứ\033[1;36m Sáu";break;case 'saturday':$weekday = "\033[1;33mThứ \033[1;36mBảy";break;default:$weekday = "\033[1;33mChủ \033[1;36mNhật";break;}
$key=array('HFFDJ93NSNSJR2H','XZSDSJFDSNSNSJD','32FDERWDSFDSNSJ','HED34WFDSDJV456','HDFDSFDSSNSJRT3','HDSJ93NSNSJ854T','ẸTTFDHGFDNSJ67F','H4V3YB54FDSFDJH','EWFSA253SFDFSJ1','HSDFDSSFSFDSSNS','OLK7J76SFSFDSSN','GFH766WSJ93NSNS','HFDSFDSFSDFDSNS','TY7RU5NE4WNSNSJ','2XCRTV4765SJHTR','FDSTVTRHDY65JHG','HDS432GH76576NS','VE3T465R4546TR4','SWH8U653YV54324','VE3T465R4546H5W','VE3T465R45HGFHG','87HGF43SGJL46TR','HGFHGF2DZ3D4M76','HGFHGF4GGDFGR5E','VHGFHGF65R4546T','VE3T4REY545B436','FHGFHGKUYKUYF6T','VE3T465R4546TR4','UYIT465R45HFGHG','HFGHFHGFHGFH454','7987JH465R4546T');
$i=0;
foreach($key as $keyy){
	$i++;
	if ($i==$ngay){
		$keytoday=$keyy;
		break;
	}
}
?>
