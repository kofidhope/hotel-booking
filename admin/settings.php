<?php
require('inc/essentials.php');
adminLogin();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - settings</title>
    <?php
     require('inc/links.php');
     require('inc/Header.php');
    ?>
</head>
<body class="bg-light">

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3>SETTINGS</h3>
                <!-- general settings section -->
                <div class="card border-0 shadow-sm mb-4">
                  <div class="card-body">
                        <div class="d-flex align-item-center justify-content-between mb-3">
                           <h5 class="card-title m-0">General Settings</h5>
                             <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                              <i class="bi bi-pencil-square"></i>Edit
                             </button>
                        </div>                    
                        <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                        <p class="card-text" id ="site_title"></p>
                        <h6 class="card-subtitle mb-1 fw-bold">About us</h6>  
                        <p class="card-text" id ="site_about"></p>                      
                    </div>
                </div>
                <!-- general modal settings dection-->
                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form id="general_s_form">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">General settings</h5>                                    
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Site Title</label>
                                        <input name="site_title" id ="site_title_inp" type="text" class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">About us</label>                            
                                        <textarea name="site_about" id ="site_about_inp" class="form-control shadow-none"rows="6" required></textarea>
                                    </div> 
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-dark outline-none text-white shadow-none">Submit</button>
                                </div>
                                </div>
                            </form>                        
                        </div>
                </div>
                <!-- shutdown settings -->
                <div class="card border-0 shadow-sm">
                  <div class="card-body">
                        <div class="d-flex align-item-center justify-content-between mb-3">
                           <h5 class="card-title m-0">Shutdown Website</h5>
                           <div class="form-check form-switch">
                            <form>
                            <input onchange="upd_shitdown(this.value)" class="form-check-input" type="checkbox" id="shutdown">
                            </form>                                                              
                            </div>                           
                        </div>                                              
                        <p class="card-text">
                            No one will be allowed to book hotel room, when shutdown mode is on
                        </p>                      
                    </div>
                </div>
                 <!-- contact details section -->   
                 <div class="card border-0 shadow-sm mb-4">
                  <div class="card-body">
                        <div class="d-flex align-item-center justify-content-between mb-3">
                           <h5 class="card-title m-0">contacts Settings</h5>
                             <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contacts-s">
                              <i class="bi bi-pencil-square"></i>Edit
                             </button>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
                                    <p class="card-text" id ="address"></p>
                                </div>   
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Goodle Map</h6>
                                    <p class="card-text" id ="gmap"></p>
                                </div> 
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Phone number</h6>
                                    <p class="card-text mb-1">
                                        <!-- <i class="bi bi-telephone-fill"> -->
                                        <!-- <span id="pn1"></span> -->
                                    </p>
                                    <p class="card-text">
                                        <!-- <i class="bi bi-telephone-fill"> -->
                                        <!-- <span id="pn2"></span> -->
                                    </p>
                                </div>      
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">E-mail</h6>
                                    <p class="card-text" id ="email"></p>
                                </div>     
                                                 
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Social Links</h6>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-facebook me-1"></i>
                                        <span id="tw"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-instagram me-1"></i> 
                                        <span id="fb"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-twitter-x me-1"></i>
                                        <span id="insta"></span>
                                    </p>
                                </div> 
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">iframe</h6>
                                    <iframe id="iframe" class="border p-2 w-100" loading="lazy"></iframe>
                                </div> 
                            </div>
                        </div>                    
                         
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require('inc/scripts.php');?>

<script>
    let general_data;
    let general_s_form = document.getElementById('general_s_form')
    let site_title_inp = document.getElementById('site_title_inp');
    let site_about_inp = document.getElementById('site_about_inp');
    
        function get_general()
        {
            let site_title = document.getElementById('site_title');
            let site_about = document.getElementById('site_about');

            let shutdown_toggle = document.getElementById('shutdown_toggle');

            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/settings_crud.php",true);
            xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');

            xhr.onload = function(){
               let general_data = JSON.parse(this.responseText);

                site_title.innerText = general_data.site_title;
                site_about.innerText = general_data.site_about;

                site_title_inp.value = general_data.site_title;
                site_about_inp.value = general_data.site_about;

                if(general_data.shutdown_toggle ==0){
                    shutdown_toggle.checked = false;
                    shutdown_toggle.value = 0;
                }else{
                    shutdown_toggle.checked = false;
                    shutdown_toggle.value = 0;
                }
            }

            xhr.send('get_general');
            
        }

        general_s_form.addEventListener('submit', function(e){
            e.preventDefault();
            upd_general(site_title_inp.value,site_about_inp.value)
        })
        

        function upd_general(site_title_val,site_about_val){
            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/settings_crud.php",true);
            xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');

            xhr.onload = function(){

                var myModal = document.getElementById('general-s');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if(this.responseText ==1){
                    alert('success', 'Changes saved!')
                    get_general();
                }
                else
                {
                    alert('error', 'No changes made')
                }


            }

            xhr.send('site_title='+site_title_val+'site_about='+site_about_val+'&upd_general');
        }

        function upd_shutdown(val){
            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/settings_crud.php",true);
            xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');

            xhr.onload = function(){

                if(this.responseText ==1 && general_data.shutdown == 0){
                    alert('success', 'site has been shutdown!')                    
                }
                else
                {
                    alert('success', 'shutdown mode off!')
                }
                get_general();
            }

            xhr.send('upd_shutdown='+val);
        }

        

        windows.onload = function(){
            get_general();
        }
    
</script>

</body>
</html>