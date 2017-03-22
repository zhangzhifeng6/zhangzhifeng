<?php
    require_once 'config.php';
    //mysqli_connect杩炴帴鏁版嵁搴�
    if(!$con=mysqli_connect(HOST, USERNAME, PASSWORD))
    {
        echo mysqli_error();
    }
    //閫夋嫨鏁版嵁搴擄紝娉ㄦ剰闇�瑕佸姞寮曞彿
    if(!mysqli_select_db($con, 'test'))
    {
        echo mysqli_error();
    }
    //璁剧疆缂栫爜绫诲瀷锛屾樉绀轰腑鏂�
    if(!mysqli_query($con,'set names utf8')){
        echo mysqli_error();
    }