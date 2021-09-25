#Thiết kế hiện thị thông tin bài tập dưới đây trên một trang
web <br><b>
1.Viết PHP script để lấy thông tin cấu hình và phiên bản của PHP <br></b>
<?php
    phpinfo();
?>
<b>2. Viết PHP Lấy địa chỉ Client IP trong PHP <br></b>
<?php
    // IP từ share internet
    if(!empty($_SERVER['HTTP_CLIENT_IP']))
    {
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    }
    // IP từ proxy
    elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    // IP từ Remote Address
    else
    {
        $ip_address = $_SERVER['REMOTE_ADDR']; 
    }
    echo("Địa chỉ Client IP = $ip_address <br>");
?>
<b>3. Viết PHP Lấy URL trong PHP<br></b>
<?php
    $url = 'http://localhost:8080/ĐAtH5/United-1.php';
    $url = parse_url($url);
    echo'Scheme : '.$url['scheme']."<br>";  
	echo 'Host : '.$url['host']."<br>";  
    echo 'Path : '.$url['path']."<br>";
?>
<b>4. Viết PHP script để lấy thư mục gốc, hiện thị toàn bộ nội dung cây thư mục<br></b>
<?php
    //Lấy thư mục gốc
	$folder_root = getenv('DOCUMENT_ROOT');  
	echo $folder_root."<br>";
    //Hiển thị nội dung cây thư mục
    foreach(glob("documents/*.txt") as $file){
    echo basename($file) . " (size: " . filesize($file) . " bytes)" . "<br>";
    }
?>
<b>5. Viết PHP script để lấy thời gian file chỉnh sửa lần cuối cùng của trang hiện tại<br></b>
<?php
         echo "Lần chỉnh sửa cuối cùng: " . date ("F d Y H:i:s. ", getlastmod())."<br>";
		 ?>
		 