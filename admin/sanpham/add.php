<div class="boxright">
        <div class="boxtop">     
                Thêm mới sản phẩm
                <a href="index.php?act=listsp">   
                    <input class="btn btn-primary ne" type="button"  value="Danh sách">
                </a>
        </div>
        <div class="boxbt">
            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                <label for="">Danh mục:</label><br>
                <select name="iddm" >
                    <?php
                        foreach($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                           
                    };

                    ?>
                </select>
                <div class=" mb">
                <label for="">Tên sản phẩm</label><br>
                <div class="form-group">
                <input type="text" name="tensp" id="" class="form-control">
                </div>
                </div>
                <div class=" mb">
                <label for="">Giá</label><br>
                <div class="form-group">
                <input type="text" name="giasp" id="" class="form-control">
                </div>
                </div>
                <div class=" mb">
                <label for="">Hình ảnh</label><br>
                <div class="form-group">
                <input type="file" name="hinh" id="">
                </div>
                </div>
                <div class=" mb">
                <label for="">Mô tả</label><br>
                <div class="form-group">
               <textarea name="mota" id="" class="form-control" cols="30" rows="10"></textarea>
                </div>
                </div>
                <div class="mb">
                    <input type="submit" name="themmoi" value="Thêm mới">
                    <input type="reset" value="Nhập lại">
                </div>
                <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>
            </form>
        </div>
        <div class="boxbt">
            
        </div>
    </div>
