<div class="parallax cover overlay cover-image-full home">
        <img class="parallax-layer" src="images/hom.jpg" alt="Learning Cover" />
        <div class="parallax-layer overlay overlay-full overlay-bg-white bg-transparent" data-speed="8" data-opacity="true">
            <div class="v-center">
                <div class="page-section overlay-bg-white-strong relative paper-shadow" data-z="1">
                    <h1 class="text-display-2 margin-v-0-15 display-inline-block">VIGOR FUTSAL PATI</h1>
                    <?php
                    if(isset($_SESSION['username'])){

                        echo' <p class="text-subhead">Selamat Datang Di VIGOR Futsal Pati</p>';
                    }else{

                        echo'
   <a class="btn btn-green-500 btn-lg paper-shadow" data-hover-z="2" data-animated data-toggle="modal" href="#modal-overlay-signup">DAFTAR MEMBER VIGOR SEKARANG</a>

                        ';

                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
 
    <div class="modal grow modal-overlay modal-backdrop-body fade" id="modal-overlay-signup">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <div class="modal-dialog">
            <div class="v-cell">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="wizard-container wizard-1" id="wizard-demo-1">
                            <div data-scrollable-h>
                                <ul class="wiz-progress">
                                    <li class="active">Mulai Akun</li>
                                    <li>Rincian</li>
                                    <li>Informasi Kontak</li>
                                </ul>
                            </div>
                            <form action="simpan-member.php" method="POST" data-toggle="wizard" class="max-width-500 h-center" enctype="multipart/form-data">
                                <fieldset class="step relative paper-shadow form-horizontal" data-z="2">
                                  <div class="page-section-heading">
                                        <h2 class="text-h3 margin-v-0">Mulai Membuat Akun Anda</h2>
                                        <h3 class="text-h4 margin-v-10 text-grey-400">Silahkan Isikan Klik Next Untuk Melanjutkan</h3>
                                    </div>
                                  
                                   
                                    <div class="text-right">
                                        <button type="button" class="wiz-next btn btn-primary">Next</button>
                                    </div>
                                </fieldset>
                                <fieldset class="step relative paper-shadow" data-z="2">
                                    <div class="page-section-heading">
                                        <h2 class="text-h3 margin-v-0">LENGKAPI DATA AKUN ANDA</h2>
                                        <h3 class="text-h4 margin-v-10 text-grey-400">Klik Line Untuk Mengisi Data</h3>
                                    </div>
                                        <div class="form-group form-control-material">
                                        <input class="form-control" type="text" id="wiz-lusername" name="txtUsername" placeholder="Username" />
                                   
                                    </div>
                                       <div class="form-group form-control-material">
                                        <input class="form-control" type="password" id="wiz-lpass" name="txtPassMember" placeholder="Password" />
                                        
                                    </div>
                                     
                                       <div class="form-group form-control-material">
                                        <input class="form-control" type="text" id="wiz-lname" name="txtNmLengkap" placeholder="Nama Lengkap" />
                                        
                                           </div>  
                                      
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <button type="button" class="wiz-prev btn btn-default">Previous</button>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <button type="button" class="wiz-next btn btn-primary">Next</button>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="step relative paper-shadow" data-z="2">
                                    <div class="page-section-heading">
                                        <h2 class="text-h3 margin-v-0">Informasi Kontak</h2>
                                        <h3 class="text-h4 margin-v-10 text-grey-400">Klik Line Untuk Mengisi Data</h3>
                                    </div>
                                     
                                       <div class="form-group form-control-material">
                                        <textarea name="txtAlamat" rows="5" class="form-control" id="wiz-address" placeholder="Alamat"></textarea>
                                      
                                    </div>             
                                    <div class="form-group form-control-material">
                                        <input name="txtEmail" class="form-control" type="email" id="wiz-email" placeholder="Email" />
                                        
                                    </div>
                                    
                                    <div class="form-group form-control-material">
                                        <input name="txtKontak" class="form-control" type="text" id="wiz-nohp1" placeholder="Nomor HP/ Telpon" />
                                        
                                    </div>
                                    
                                  
                                     <div class="form-group form-control-material">
                                    
                                        <label for="wiz-photo">Upload Foto:</label>
                                    </div>
                                    <div class="form-group form-control-material">
                                        <input class="form-control" type="file" id="wiz-photo"  name="upPhoto" />
                                      
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <button type="button" class="wiz-prev btn btn-default">Previous</button>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <button type="submit" class="btn btn-primary">Daftar</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>