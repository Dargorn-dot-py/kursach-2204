<?php
include_once ('php/connect_db.php');
$sql="SELECT * FROM `novosti` ORDER BY id DESC";
$result=mysqli_query($db, $sql);
$row_count=mysqli_num_rows($result);
if ($row_count>0){
    // $i < 4 (вместо 4 нужное кол-во записей на страницу)
    for($i=0; $i < $row_count; $i++){
        $row_arr=mysqli_fetch_array($result);
        $id=$row_arr['id'];
        $DateTime=$row_arr['date'];
        $NewsName=$row_arr['NewsName'];
        $NewsText=$row_arr['NewsText'];
        $NewsSource=$row_arr['NewsSource'];
        $NewsAuthor=$row_arr['NewsAuthor'];
        $NewsPicSource=$row_arr['NewsPicSource'];
        echo '
        <a href="#popup'.$id.'" class="flex-block popup-link">
            <div class="block__pic">
                <div class="pic">
                    <div class="pic-img">
                        <img src="'.$NewsPicSource.'" alt="">
                    </div>
                </div>
            </div>
            <div class="block__label" style="color: '.$brandColor.'; text-shadow: 0 0 3px #eee">'.$NewsName.'</div>
        </a>
        <div id="popup'.$id.'" class="popup">
            <div class="popup__body">
                <div class="popup__content">
                    <div class="popup-left">
                        <div class="popup-pic">
                            <div class="popup-pic-img">
                                <img src="'.$NewsPicSource.'" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="popup-right">
                        <div class="popup-right__body">
                            <div class="popup__title"><div><p style="font-size: 26px; color: '.$brandColor.'">'.$NewsName.'</p></div></div>
                            <div class="popup__text">
                                <ul class="stats">
                                    <li class="stat">Дата: '.$NewsText.'</li>
                                </ul>
                            </div>
                            <div class="popup__buttons">
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