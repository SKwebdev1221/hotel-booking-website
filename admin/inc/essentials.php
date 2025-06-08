<?php
    // Frontend purpose data
    define('SITE_URL','http://127.0.0.1/hbwebsite/');
    define('ABOUT_IMG_PATH',SITE_URL.'images/about/');
    define('CAROUSEL_IMG_PATH',SITE_URL.'images/carousel/');
    define('FACILITIES_IMG_PATH',SITE_URL.'images/facilities/');
    define('ROOMS_IMG_PATH',SITE_URL.'images/room/');

    define('UPLOAD_IMAGE_PATH',$_SERVER['DOCUMENT_ROOT'].'/hbwebsite/images/');
    define('ABOUT_FOLDER','about/');
    define('CAROUSEL_FOLDER','carousel/');
    define('FACILITIES_FOLDER', $_SERVER['DOCUMENT_ROOT'].'/hbwebsite/images/facilities/');
    define('ROOMS_FOLDER','room/');


    function adminLogin()
    {
        session_start();
        if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true))
        {
            echo "
            <script>
                window.location.href='index.php';
            </script>
            ";
            exit;
        }
    }

    function redirect($url)
    {
        echo "
            <script>
                window.location.href='$url';
            </script>
        ";
    }

    function alert($type,$msg)
    { 
        $bs_class = ($type =="success") ? "alert-success" : "alert-danger";
        echo<<<alert
            <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
                <strong class="me-3">$msg</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        alert;
    }

    function uploadImage($image,$folder)
    {
        $valid_mime = ['image/jpeg','image/png','image/webp'];
        $img_mime = $image['type'];

        if(!in_array($img_mime,$valid_mime))
        {
            return 'inv_img';
        }
        else if(($image['size']/(1024*1024))>2)
        {
            return 'inv_size'; //invalid size - greater than 2 MB
        }
        else
        {
            $ext = pathinfo($image['name'],PATHINFO_EXTENSION);
            $rname = 'IMG_'.random_int(11111,99999).".$ext";

            $img_path = UPLOAD_IMAGE_PATH.$folder.$rname;
            move_uploaded_file($image['tmp_name'],$img_path);
            return $rname;
        }
    }
    
    function deleteImage($image,$folder)
    {
        $file_path = UPLOAD_IMAGE_PATH.$folder.$image;
        if(file_exists($file_path))
        {
            if(unlink($file_path))
            {
                return true;
            }
            else
            {
                error_log("Failed to delete file: $file_path");
                return false;
            }
        }
        else
        {
            error_log("File does not exist: $file_path");
            return false;
        }
    }

    function uploadSVGImage($image,$folder)
    {
        $valid_mime = ['image/svg+xml'];
        $img_mime = $image['type'];

        if(!in_array($img_mime,$valid_mime))
        {
            return 'inv_img';
        }
        else if(($image['size']/(1024*1024))>1)
        {
            return 'inv_size'; //invalid size - greater than 2 MB
        }
        else
        {
            $ext = pathinfo($image['name'],PATHINFO_EXTENSION);
            $rname = 'IMG_'.random_int(11111,99999).".$ext";
            $img_path = $folder . $rname;
            if(move_uploaded_file($image['tmp_name'], $img_path))
            {
                return $rname;
            }
        }
    }
?>
