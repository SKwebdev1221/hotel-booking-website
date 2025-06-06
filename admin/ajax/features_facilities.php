<?php
    require('../inc/essentials.php');
    require('../inc/db_config.php');
    adminLogin();

    if(isset($_POST['add_feature']))
    {
        $frm_data = filteration($_POST);

        $q = "INSERT INTO `features`(`name`) VALUES (?)";
        $values = [$frm_data['name']];
        $res = insert($q,$values,"s");
        if($res > 0){
            echo "1";
        } else {
            echo "0";
        }
    }

    if(isset($_POST['get_features']))
    {
        $res = selectAll('features');
        $i = 1;
        while($row = mysqli_fetch_assoc($res))
        {
            echo <<<data
                <tr>
                    <td>$i</td>
                    <td>$row[name]</td>
                    <td>
                        <button type='button' onclick='rem_feature($row[id])' class='btn btn-danger btn-sm shadow-none'>
                            <i class='bi bi-trash'></i> Delete
                        </button>
                    </td>
                </tr>
            data;
            $i++;
        }
    }

    if(isset($_POST['rem_feature']))
    {
        $frm_data = filteration($_POST);
        $values = [$frm_data['rem_feature']];

        $q = "DELETE FROM `features` WHERE `id`=?";
        $res = delete($q,$values,'i');
        if($res)
        {
            echo 1;
        }
        else
        {
            echo 0;
        }
    }

    if(isset($_POST['add_facility']))
    {
        $frm_data = filteration($_POST);

        $img_r = uploadSVGImage($_FILES['icon'],FACILITIES_FOLDER);
 
        if($img_r == 'inv_img')
        {
            echo $img_r;
        }
        else if($img_r == 'inv_size')
        {
            echo $img_r;
        }
        else if($img_r == 'upd_failed')
        {
            echo $img_r;
        }
        else 
        {
            $q = "INSERT INTO `facilities`(`icon`, `name`, `description`) VALUES (?,?,?)";
            $values = [$img_r, $frm_data['name'], $frm_data['desc']];
            $res = insert($q,$values,"sss");
            echo $res;
        }

    }

    if(isset($_POST['get_facilities']))
    {
        $res = selectAll('facilities');
        $i = 1;
        $path = FACILITIES_IMG_PATH;
        while($row = mysqli_fetch_assoc($res))
        {
            echo<<<data
                <tr class="align-middle">
                    <td>$i</td>
                    <td><img src='$path$row[icon]' width='100px'></td>
                    <td>$row[name]</td>
                    <td>$row[description]</td>
                    <td>
                        <button type='button' onclick='rem_facility($row[id])' class='btn btn-danger btn-sm shadow-none'>
                            <i class='bi bi-trash'></i> Delete
                        </button>
                    </td>
                </tr>
            data;
            $i++;
        }
    }

    if(isset($_POST['rem_facility']))
    {
        $frm_data = filteration($_POST);
        $values = [$frm_data['rem_facility']];

        // Fetch the icon filename
        $pre_q = "SELECT `icon` FROM `facilities` WHERE `id`=?";
        $res = select($pre_q, $values, 'i');
        $img = mysqli_fetch_assoc($res);

        // Delete the icon file from the server
        if($img && !empty($img['icon'])) {
            $icon_path = FACILITIES_FOLDER . $img['icon'];
            if(file_exists($icon_path)){
                unlink($icon_path);
            }
        }

        // Delete the row from the database
        $q = "DELETE FROM `facilities` WHERE `id`=?";
        $res = delete($q, $values, 'i');
        if($res)
        {
            echo 1;
        }
        else
        {
            echo 0;
        }
    }
?>
