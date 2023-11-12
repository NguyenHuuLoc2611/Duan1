<div class="boxright">
        <div class="boxtop">     
                Danh sách danh mục
                <!-- <a href="index.php?act=listdm">   
                    <input class="btn btn-primary ne" type="button"  value="Danh sách">
                </a> -->
        </div>
        <div class="boxbt ml">
        <div class="container">
                <div class="bang">
                <table class="table table-hover">
                    <thead>
                      <tr >
                        <!-- <th></th> -->
                        <th >Mã Sản Phẩm</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Hình </th>
                        <th>Giá</th>
                        <th>Thao Tác</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach($listsanpham as $sanpham){
                            extract($sanpham);
                            $hinhpath = "../upload/".$img;
                            $suadm = "index.php?act=suadm&id=".$id;
                            $xoadm = "index.php?act=xoasp&id=".$id;
                            echo ' <tr>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td  height ="60px">'.$hinhpath.'</td>
                            <td>'.$price.'</td>
                            <td width="200px">'.$mota.'</td>
                            
                            <td><a href="'.$suadm.'"><input class="btn btn-warning" type="button" value="Sửa"></a>  <a href="'. $xoadm.'"><input type="button" class="btn btn-danger" value="Xóa"></a></td>
                          </tr>';
                        };

                    ?>
                    </tbody>
                  </table>
                </div>
                </div>
                <div class=" ml">
                    <!-- <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn"> -->
                    <a href="index.php?act=adddm"><input class="btn btn-success" type="button" value="Nhập thêm"></a>
                </div>
        </div>
    </div>