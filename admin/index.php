<?php
include "../model/pdo.php";
include "header.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";

if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch($act){
        case 'adddm':
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $tenloai=$_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công";
            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/list.php";
            break;
            break; 
            
        case 'xoadm':
            if(isset($_GET['id'])&&($_GET['id']>0)){
            delete_danhmuc($_GET['id']);
            }   
               
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/list.php";
            break;    
        case 'suadm':
            if(isset($_GET['id'])&&($_GET['id']>0)){
            $dm=loadone_danhmuc($_GET['id']);     
            }
    
            include "danhmuc/update.php";
            break; 
        case 'updatedm':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $id=$_POST['id'];
                $tenloai=$_POST['tenloai'];
                update_danhmuc($id,$tenloai);
                $thongbao = "Cập nhật thành công";
            }   
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/list.php";
            break;     
        //SẢN PHẨM
        case 'addsp':
            // kiểm tra xem ng dùng có nhấn vào nút add k ?
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $iddm=$_POST['iddm'];
                $tensp=$_POST['tensp'];
                $giasp=$_POST['giasp'];
                $mota=$_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                  } else {
                   // echo "Sorry, there was an error uploading your file.";
                  }
                insert_sanpham($tensp, $giasp , $hinh, $mota, $iddm);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc=loadall_danhmuc();
            // var_dump($listdanhmuc);
            include "sanpham/add.php";
            break;
        case 'addsp':
            include "sanpham/add.php";
            break; 
        default:
            include "home.php" ;
            break;    
    }
}else {
    include "home.php";
}
include "footer.php";
?>