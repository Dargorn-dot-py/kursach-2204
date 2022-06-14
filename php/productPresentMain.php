<?php
include_once ('php/connect_db.php');
$sql="SELECT * FROM `products` ORDER BY id DESC";
$result=mysqli_query($db, $sql);
$row_count=mysqli_num_rows($result);
if ($row_count>0){
    // $i < 4 (вместо 4 нужное кол-во записей на страницу)
    for($i=0; $i < 4; $i++){
        $row_arr=mysqli_fetch_array($result);
        $id=$row_arr['id'];
        $productPic = $row_arr['productPic'];
        $brandColor = $row_arr['brandColor'];
        $brand = $row_arr['brand'];
        $productName = $row_arr['productName'];
        $cost = $row_arr['cost'];
        $ram=$row_arr['ram'];
        $rom=$row_arr['rom'];
        $nfc = $row_arr['nfc'];
        $reliseDate = $row_arr['reliseDate'];
        $productAvailable = $row_arr['productAvailable'];
        
        echo '
        <a href="#popup'.$id.'" class="product-slider__item">
            <div class="product-item">
                <div class="product-item__pic">
                    <div class="post-pic">
                        <div href="" class="post-pic-img">
                            <img src="'.$productPic.'" alt="">
                        </div>
                    </div>
                </div>
                <div class="product-item__label">
                    <span>'.$brand.'</span>
                    <h1>'.$productName.'</h1>
                </div>
                <div class="product-item__price">'.$cost.' <i class="fa fa-rub"></i></div>
            </div>
        </a>
        <div id="popup'.$id.'" class="popup">
            <div class="popup__body">
                <div class="popup__content">
                    <div class="popup-left">
                        <div class="popup-pic">
                            <div class="popup-pic-img">
                                <img src="'.$productPic.'" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="popup-right">
                        <div class="popup-right__body">
                            <div class="popup__title"><div><p style="font-size: 26px; color: '.$brandColor.'">'.$brand.'</p> '.$productName.'</div></div>
                            <div class="popup__text">
                                <ul class="stats">
                                    <li class="stat">RAM: '.$ram.' gb</li>
                                    <li class="stat">ROM: '.$rom.' gb</li>
                                    <li class="stat">NFC: '.$nfc.'</li>
                                    <li class="stat">Дата выхода: '.$reliseDate.'</li>
                                    <li class="stat stat-cost" style="font-weight: 600; font-size: 22px">Цена: '.$cost.' р.</li>
                                    <li class="stat" style="color: #999; font-size: 16px">В наличии: '.$productAvailable.'</li>
                                </ul>
                            </div>
                            <div class="popup__buttons">
                                <a class="popup-button-cost">'.$cost.' <i style="font-size: 18px" class="fa fa-rub"></i></a>
                                <a href="##" class="popup-button popup__buy close-popup">Купить</a>
                                <a href="##" class="popup-button popup__close close-popup">Закрыть</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ';
    }
}
?>