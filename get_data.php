<?php
require_once('admin/config/config.php');

extract($_POST);
$query = $mysqli->query("SELECT * FROM tbl_music WHERE music_id = {$id}");
if ($query->num_rows > 0) {
    $resp['status'] = 'success';
    $res = $query->fetch_array();
    if (empty($res['music_img']) || (!empty($res['music_img']) && !is_file(explode("?", $res['music_img'])[0])))
        $res['music_img'] = "./admin/modules/qlmusic/uploads/" . $res['music_img'];
    $resp['data'] = $res;
} else {
    $resp['status'] = 'failed';
    $resp['error'] = 'Unknown Audio ID';
}
echo json_encode($resp);