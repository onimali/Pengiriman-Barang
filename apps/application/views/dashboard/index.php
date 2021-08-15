<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pengiriman Barang</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="<?=base_url('../public/dashboard/')?>img/favicon.png"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here --> 
    <link rel="stylesheet" href="<?=base_url('../public/dashboard/')?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url('../public/dashboard/')?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url('../public/dashboard/')?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?=base_url('../public/dashboard/')?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url('../public/dashboard/')?>css/themify-icons.css">
    <link rel="stylesheet" href="<?=base_url('../public/dashboard/')?>css/nice-select.css">
    <link rel="stylesheet" href="<?=base_url('../public/dashboard/')?>css/flaticon.css">
    <link rel="stylesheet" href="<?=base_url('../public/dashboard/')?>css/gijgo.css">
    <link rel="stylesheet" href="<?=base_url('../public/dashboard/')?>css/animate.css">
    <link rel="stylesheet" href="<?=base_url('../public/dashboard/')?>css/slick.css">
    <link rel="stylesheet" href="<?=base_url('../public/dashboard/')?>css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="<?=base_url('../public/dashboard/')?>css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Pengiriman Barang</h3>
                                <p>Kami melayani barang rute Jakarta - Bandung dengan cepat dan aman</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Pengiriman Barang</h3>
                                <p>Kami melayani barang rute Jakarta - Bandung dengan cepat dan aman</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_3 overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Pengiriman Barang</h3>
                                <p>Kami melayani barang rute Jakarta - Bandung dengan cepat dan aman</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- slider_area_end -->

    <!-- where_togo_area_start  -->
    <div class="where_togo_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="form_area">
                        <h3>Cek Tarif Pengiriman</h3>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="search_wrap">
                        <form class="search_form" action="#">
                            <div class="input_field">
                                <select id="asal">
                                    <option data-display="Asal Paket">Asal Paket</option>
                                    <option value="Jakarta">Jakarta</option>
                                    <option value="Bandung">Bandung</option>
                                </select>
                            </div>
                            <div class="input_field">
                                <input id="tujuan" type="text" placeholder="Tujuan Paket" readonly="">
                            </div>
                            <div class="input_field">
                                <input id="berat" type="text" min="1" placeholder="Berat Paket" >
                            </div>
                            <div class="search_btn">
                                <a class="boxed-btn4 " id="proses" style="color: white">Proses</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- where_togo_area_end  -->
    
    <!-- popular_destination_area_start  -->
    <div class="popular_destination_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Tarif Pengiriman</h3>
                        <p>Berikut daftar harga pengiriman barang berdasarkan pencarianmu</p>
                    </div>
                </div>
            </div>
            <div class="row" >
                <div class="col-lg-12 col-md-12 text-center" id="view_harga">
                    <p>Silahkan lengkapi data diatas!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- popular_destination_area_end  -->

    <!-- newletter_area_start  -->
    <div class="newletter_area overlay">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="newsletter_text">
                                <h4>Cek Resi</h4>
                                <p>Silahkan masukan resi anda pada kolom disamping untuk mendapatkan informasi pengiriman.</p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="mail_form">
                                <div class="row no-gutters">
                                    <div class="col-lg-9 col-md-8">
                                        <div class="newsletter_field">
                                            <input type="text" placeholder="Nomor Resi Pengiriman" id="resi">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="newsletter_btn">
                                            <a class="boxed-btn4 " style="color: white" id="cek">Proses</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- newletter_area_end  -->

    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Informasi Pengiriman</h3>
                        <p>Berikut informasi pengiriman berdasarkan nomor resi pengiriman yang anda masukan.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 text-center" id="view_resi">
                    <p>Silahkan masukan nomor resi pengiriman yang telah disediakan!</p>
                </div>
            </div>
        </div>
    </div>



    <footer class="footer">
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Pengirima Barang
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


  <!-- Modal -->
  <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="serch_form">
            <input type="text" placeholder="Search" >
            <button type="submit">search</button>
        </div>
      </div>
    </div>
  </div>
    <!-- link that opens popup -->
<!--     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script> -->
    <!-- JS here -->
    <script src="<?=base_url('../public/dashboard/')?>js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="<?=base_url('../public/dashboard/')?>js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?=base_url('../public/dashboard/')?>js/popper.min.js"></script>
    <script src="<?=base_url('../public/dashboard/')?>js/bootstrap.min.js"></script>
    <script src="<?=base_url('../public/dashboard/')?>js/owl.carousel.min.js"></script>
    <script src="<?=base_url('../public/dashboard/')?>js/isotope.pkgd.min.js"></script>
    <script src="<?=base_url('../public/dashboard/')?>js/ajax-form.js"></script>
    <script src="<?=base_url('../public/dashboard/')?>js/waypoints.min.js"></script>
    <script src="<?=base_url('../public/dashboard/')?>js/jquery.counterup.min.js"></script>
    <script src="<?=base_url('../public/dashboard/')?>js/imagesloaded.pkgd.min.js"></script>
    <script src="<?=base_url('../public/dashboard/')?>js/scrollIt.js"></script>
    <script src="<?=base_url('../public/dashboard/')?>js/jquery.scrollUp.min.js"></script>
    <script src="<?=base_url('../public/dashboard/')?>js/wow.min.js"></script>
    <script src="<?=base_url('../public/dashboard/')?>js/nice-select.min.js"></script>
    <script src="<?=base_url('../public/dashboard/')?>js/jquery.slicknav.min.js"></script>
    <script src="<?=base_url('../public/dashboard/')?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?=base_url('../public/dashboard/')?>js/plugins.js"></script>
    <script src="<?=base_url('../public/dashboard/')?>js/gijgo.min.js"></script>
    <script src="<?=base_url('../public/dashboard/')?>js/slick.min.js"></script>
   

    
    <!--contact js-->
    <script src="<?=base_url('../public/dashboard/')?>js/contact.js"></script>
    <script src="<?=base_url('../public/dashboard/')?>js/jquery.ajaxchimp.min.js"></script>
    <script src="<?=base_url('../public/dashboard/')?>js/jquery.form.js"></script>
    <script src="<?=base_url('../public/dashboard/')?>js/jquery.validate.min.js"></script>
    <script src="<?=base_url('../public/dashboard/')?>js/mail-script.js"></script>


    <script src="<?=base_url('../public/dashboard/')?>js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
    </script>
    <script>
        $(document).ready(function(){
            $('#asal').change(function() {
              var asal    = $('#asal').val();

              if (asal == 'Jakarta') {
                $('#tujuan').val('Bandung');
              }
              else if(asal == 'Bandung')
              {
                $('#tujuan').val('Jakarta');
              }
              else
              {
                $('#tujuan').val('');
              }
            });
        });
      </script>
      <script>
        $(document).ready(function(){
            $('#proses').click(function() {
              var asal    = $('#asal').val();
              var tujuan  = $('#tujuan').val();
              var berat   = $('#berat').val();
              if (asal == '' || tujuan == '' || berat == '') {
                alert('Silahkan lengkapi data');
                return false;
              }
              $.ajax({
                    type : 'POST',
                    url : '<?=base_url('dashboard/cek_tarif')?>',
                    data : {'asal' : asal , 'tujuan' : tujuan , 'berat' : berat},
                    success : function(res){
                      console.log(res);
                      $('#view_harga').html(res);
                        
                    }
                });
          });
        });
      </script>
      <script>
        $(document).ready(function(){
            $('#cek').click(function() {
              var resi    = $('#resi').val();
              if (resi == '') {
                alert('Silahkan masukan nomor resi pengiriman');
                return false;
              }
              $.ajax({
                    type : 'POST',
                    url : '<?=base_url('dashboard/cek_resi')?>',
                    data : {'resi' : resi},
                    success : function(res){
                      console.log(res);
                      $('#view_resi').html(res);
                        
                    }
                });
          });
        });
      </script>
</body>

</html>