<?php 
    require('inc/essentials.php');
    adminLogin();
    session_regenerate_id(true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Settings</title>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">SETTINGS</h3>

                <!-- General Settings Section -->

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">General Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                                <i class="bi bi-pencil-square me-1"></i>Edit
                            </button>
                        </div>
                        <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                        <p class="card-text" id="site_title"></p>
                        <h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
                         <p class="card-text" id="site_about"></p>
                    </div>
                </div>

                <!-- General Settings Modal -->

                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="general_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">General Settings</h5>                                
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Site Title</label>
                                        <input type="type" name="site_title" id="site_title_inp" class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold p-0">Address</label>
                                        <textarea name="site_about" id="site_about_inp" class="form-control" rows="6" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Shutdown Section -->
                 
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Shutdown Website</h5>
                            <div class="form-check form-switch">
                                <form>
                                    <input onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" id="shutdown-toggle">
                                </form>
                            </div>
                        </div>
                        <p class="card-text">
                            No customer will be allowed to book hotel room, when the shutdown mode is enabled.
                        </p>
                    </div>
                </div>

                <!-- Contact detail Section -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">General Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contacts-s">
                                <i class="bi bi-pencil-square me-1"></i>Edit
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
                                    <p class="card-text" id="address"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Google Map</h6>
                                    <p class="card-text" id="gmap"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Phone Numbers</h6>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-telephone-fill"></i>+
                                        <span id="pn1"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-telephone-fill"></i>+
                                        <span id="pn2"></span>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">E-Mail</h6>
                                    <p class="card-text" id="email"></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Social Links</h6>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-twitter me-2"></i>
                                        <span id="tw"></span>
                                    </p>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-instagram me-2"></i>
                                        <span id="insta"></span>
                                    </p>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-facebook me-2"></i>
                                        <span id="fb"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-pinterest me-2"></i>
                                        <span id="pin"></span>
                                    </p>
                                </div>
                                <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">iFrame</h6>
                                <iframe id="iframe" class="border p-2 w-100" loading="lazy"></iframe>
                            </div>
                        </div>  
                    </div>
                </div>
                </div>

                <!-- Contacts Details Modal -->

                <div class="modal fade" id="contacts-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form id="contacts_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Contact Settings</h5>                                
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid p-0">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Address</label>
                                                    <input type="type" name="address" id="address_inp" class="form-control shadow-none" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Google Map Links</label>
                                                    <input type="type" name="gmap" id="gmap_inp" class="form-control shadow-none" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Phone Numbers(With Country Code)</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">
                                                            <i class="bi bi-telephone-fill"></i>
                                                        </span>
                                                        <input type="text" name="pn1" id="pn1_inp" class="form-control shadow-none">
                                                    </div>    
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">
                                                            <i class="bi bi-telephone-fill"></i>
                                                        </span>
                                                        <input type="text" name="pn2" id="pn2_inp" class="form-control shadow-none">
                                                    </div>                                              
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Email</label>
                                                    <input type="type" name="email" id="email_inp" class="form-control shadow-none" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Social Links</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">
                                                            <i class="bi bi-twitter"></i>
                                                        </span>
                                                        <input type="text" name="twit" id="twit_inp" class="form-control shadow-none">
                                                    </div>  
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">
                                                            <i class="bi bi-instagram"></i>
                                                        </span>
                                                        <input type="text" name="insta" id="insta_inp" class="form-control shadow-none">
                                                    </div> 
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">
                                                            <i class="bi bi-facebook"></i>
                                                        </span>
                                                        <input type="text" name="fb" id="fb_inp" class="form-control shadow-none">
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">
                                                            <i class="bi bi-pinterest"></i>
                                                        </span>
                                                        <input type="text" name="pin" id="pin_inp" class="form-control shadow-none">
                                                    </div>                                               
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">iFrame Src</label>
                                                    <input type="type" name="iframe" id="iframe_inp" class="form-control shadow-none" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="contacts_inp(contacts_data)" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php require('inc/scripts.php'); ?>

    <script>
        let general_data, contact_data;

        let general_s_form = document.getElementById('general_s_form');

        let site_title_inp = document.getElementById('site_title_inp');
        let site_about_inp = document.getElementById('site_about_inp');

        let contacts_s_form = document.getElementById('contacts_s_form');

        function get_general()
        {
            let site_title = document.getElementById('site_title');
            let site_about = document.getElementById('site_about');

            let shutdown_toggle = document.getElementById('shutdown-toggle');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php",true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function()
            {
                general_data = JSON.parse(this.responseText);

                site_title.innerText = general_data.site_title;
                site_about.innerText = general_data.site_about;

                site_title_inp.value = general_data.site_title;
                site_about_inp.value = general_data.site_about;  

                if(general_data.shutdown == 0)
                {
                    shutdown_toggle.checked = false;
                    shutdown_toggle.value = 0;
                }
                else
                {
                    shutdown_toggle.checked = true;
                    shutdown_toggle.value = 1;
                }
            }
            xhr.send('get_general=1');
        }

        general_s_form.addEventListener('submit',function(e)
        {
            e.preventDefault();
            upd_general(site_title_inp.value,site_about_inp.value);

        })

        function upd_general(site_title_val,site_about_val)
        {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php",true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function()
            {   
                var myModal = document.getElementById('general-s');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if(this.responseText == 1)
                {
                    alert('success','Changes saved!');
                    get_general();
                }
                else
                {
                    alert('error','No changes made!');
                }
            }
            xhr.send('site_title='+site_title_val+'&site_about='+site_about_val+'&upd_general=1');
        }

        function upd_shutdown(val)
        {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php",true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function()
            {   
                if(this.responseText == 1 && general_data.shutdown == 0)
                {
                    
                    alert('success','Site had been shutdown!');
                }
                else
                {
                    alert('success','Shutdown mode off!');
                }
                get_general();
            }
            xhr.send('upd_shutdown='+val);
        }

        function get_contacts()
        {
            let contacts_p_id = ['address', 'gmap', 'pn1', 'pn2', 'email','tw', 'fb','insta', 'pin'];
            let iframe = document.getElementById('iframe');
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php",true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function()
            {
                contacts_data = JSON.parse(this.responseText);
                contacts_data = Object.values(contacts_data);
                console.log(contacts_data);
                for(i=0;i<contacts_p_id.length;i++)
                {
                    document.getElementById(contacts_p_id[i]).innerText = contacts_data[i+1];

                }
                iframe.src = contacts_data[10];
                contacts_inp(contacts_data);
            }
            xhr.send('get_contacts');
        }

        function contacts_inp(data)
        {
            let contacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp','twit_inp', 'fb_inp','insta_inp', 'pin_inp', 'iframe_inp'];

            for(i=0;i<contacts_inp_id.length;i++)
            {
                document.getElementById(contacts_inp_id[i]).value = data[i+1];

            }
        }

        contacts_s_form.addEventListener('submit', function(e) {
            e.preventDefault();
            upd_contacts();
        });

        function upd_contacts()
        {
            let index = ['address', 'gmap', 'pn1', 'pn2', 'email','twit', 'fb','insta', 'pin', 'iframe'];
            let contacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp','twit_inp', 'fb_inp','insta_inp', 'pin_inp', 'iframe_inp'];

            // Validate required fields
            let required_fields = ['address_inp', 'gmap_inp', 'email_inp', 'iframe_inp'];
            for(let i=0; i<required_fields.length; i++) {
                let field = document.getElementById(required_fields[i]);
                if(!field.value.trim()) {
                    alert('error', 'Please fill all required fields.');
                    field.focus();
                    return;
                }
            }
            
            let data_str = "";

            for(i=0;i<index.length;i++)
            {
                data_str += index[i] + "=" +document.getElementById(contacts_inp_id[i]).value + '&';
            }
            data_str += "upd_contacts";

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php",true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function()
            {
                var myModal = document.getElementById('contacts-s');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();
                if(this.responseText == 1)
                {
                    
                    alert('success','Changes saved');
                    get_contacts();
                }
                else
                {
                    alert('error','No changes made!');
                }
            }

            xhr.send(data_str);
        }

        window.onload = function()
        {
            get_general();
            get_contacts();
        }
    </script>
</body>
</html>