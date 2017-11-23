<?php
if($navbarcode==1){
$navbar='
    <ul class="nav navbar-nav navig3">
        <li><button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">ورود</button></li>
      <li><button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal2">ثبت نام</button></li>
    </ul>
    ';
}
elseif($navbarcode==2){
    $navbar='
    <ul class="nav navbar-nav navig3">';
    
    if(isset($_SESSION['fid'])) $navbar.='<li><a href="/facture" style="padding: 0 1em;"><img class="cart" onclick="playAudio(\'bub\')" src="/images/cart.png"/></a></li>';
$navbar.='

        <li><a href="http://www.choobshoor.com/profile"><button type="button" class="btn btn-default">پروفایل کاربری</button></a></li>
        <li><a href="/login?action=logout"><button type="button" class="btn btn-default">خروج</button></a></li>
        
    </ul>
    ';
}
$ogdesc=isset($ogdesc)?$ogdesc:'<meta property="og:description" content="چوب شور برنامه ی چند زبانه ایرانی مخصوص کودکان است که همراه با بازی و سرگرمی های جذاب، مفاهیم پایه را به کودکان می آموزد. " />';
?>

<?php
    $lang="fa";
    if($lang=="fa"){
        $rtl='<link rel="stylesheet" type="text/css" href="/css/style-rtl.css">';
        $rtl2='<link rel="stylesheet" href="/css/bootstrap-rtl.min.css">';
        $rtl3='<script type="text/javascript" src="/js/slide-rtl.js"></script>';
    }
    else{
        
        $rtl2='';
        $rtl='';
        $rtl3='<script type="text/javascript" src="/js/slide.js"></script>';
        }
?>

<!DOCTYPE html>
<html> 
	<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
    <meta property="og:title" content="چوب شور" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://www.choobshoor.com" />
    <meta property="og:image" content="https://www.choobshoor.com/images/favicon.png" />
    <meta property="og:image:secure_url" content="https://www.choobshoor.com/images/favicon.png" />
    <meta property="og:image:type" content="image/png" />
    <?php echo $ogdesc; ?>    
		<title>چوب شور</title>
		<link rel="icon" href="/images/favicon.png" type="image/x-icon"/>
        
		<link href="/css/bootstrap.min.css" rel="stylesheet">
        <?php echo $rtl2; ?>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
		<link rel="stylesheet" type="text/css" href="/css/slick.css"/>
        <link rel="stylesheet" type="text/css" href="/css/slick-theme.css"/>
		<script src="/js/animate.js"></script>
		<link rel="stylesheet" type="text/css" href="/css/animate.css"/>
		<script type="text/javascript" src="/js/slick.min.js"></script>
		
        <?php echo $rtl3; ?>
                <!-- Global Site Tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107693531-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-107693531-1');
        </script>
        
        <link href="/css/bootstrap-editable.css" rel="stylesheet">
        <script src="/js/bootstrap-editable.js"></script>
        <script type="text/javascript" src="/js/jsc.js"></script>
		<link rel="stylesheet" type="text/css" href="/css/style.css">
        <?php echo $rtl; ?>
        <meta name="samandehi" content="449764304"/>
	</head>
	<body>
        
        <!--navigation bar-->
<audio id="bub">
  <source src="/audio/bub.ogg" type="audio/ogg">
  <source src="/audio/bub.mp3" type="audio/mpeg">
</audio>
        
<nav class="navbar navbar-inverse navig" id="navig">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a href="http://www.choobshoor.com/" style="padding:0;"><img class="choob" alt="چوبشور" src="/images/favicon.png" /></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navig2">
        <li class="home"><a  href="http://www.choobshoor.com/">خانه</a></li>
        <li><a href="http://www.choobshoor.com/categories">برنامه ها</a></li> 
        <li><a href="http://www.choobshoor.com/download">دانلود چوب شور</a></li> 
        <li><a href="http://www.choobshoor.com/charge">خرید اشتراک</a></li>
        <li><a href="http://www.choobshoor.com/faq">سوالات متداول</a></li>
        <li><a href="http://www.choobshoor.com/news"> اخبار</a></li>
        <li><a href="http://www.choobshoor.com/articles">مقالات </a></li>
      </ul>
           <?php echo $navbar; ?>

        </div>   
    </div>
</nav>
<div class="loader"></div>
<script type="text/javascript">
    $(window).load(function() {
        $(".loader").fadeOut("slow");
    })
</script>
        
    
        
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ورود به حساب کاربری</h4>
        </div>
        <div class="modal-body">
            
            <form action="/login" method="post">
                <div class="ii">شماره تلفن همراه</div>
                <input style="color:black;" type="text" name="phone" placeholder="۰۹۰۰۰۰۰۰۰۰۰"><br>
                <div class="ii">رمزعبور</div>
                <input style="color:black;" type="password" name="pass" placeholder="*******" ><br> 
                <div class="submit">
                    <input type="hidden" name="action" value="login" >
                    <input type="submit" value="ورود">
                </div>
                <p style="margin-top:0.5em;"><a href="http://www.choobshoor.com/forgetpass">فراموشی رمز عبور؟</a></p>
            </form>
        </div>
          <div class="modal-image">
            <img src="/images/owl.png"/>
          </div>
        <div class="modal-footer">
            <a href="/my" >ورود به پنل ناشران</a>
        </div>
      </div>
      
    </div>
  </div>
   
<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ثبت نام</h4>
        </div>
        <div class="modal-body">
            
            <form action="signup" method="post">
                <div class="ii">شماره تلفن همراه خود را وارد کنید :</div>
                <input style="color:black;" type="text" name="phone" placeholder="۰۹۰۰۰۰۰۰۰۰۰"><br>
                <div class="submit">
                    <input type="hidden" name="action" value="signup" >
                    <input type="submit" value="ثبت نام">
                </div>
            </form>
        </div>
          <div class="modal-image">
            <img src="/images/owl.png"/>
          </div>
        <div class="modal-footer">
        </div>
      </div>
      
    </div>
  </div>
        
   
        
 <div style="background:rgb(250,169,18);height:50px;"></div>

    <audio id="myAudio">
      <source src="/audio/choobshoor.ogg" type="audio/ogg">
      <source src="/audio/choobshoor.mp3" type="audio/mpeg">
    </audio>
    <div class="audio1">
        <button onclick="playAudio('myAudio')" type="button"></button>
    
    </div>


        <!--slider-->
        <?php echo $mainSlide; ?>
        

        <!--owl-->
        <?php echo $owl; ?>
        
        <!--groups-->
        <?php echo $groups; ?>
        
        <!--contents-->
        <?php echo $contents; ?>

        
        
 <!--footer-->
<audio id="owlaud">
      <source src="/audio/owl.ogg" type="audio/ogg">
      <source src="/audio/owl.mp3" type="audio/mpeg">
</audio>
        
    <div class="footer2">
        <div class="footer">
                <div class="container-fluid footer1">
                    <div class="row ">
                        <div class="col-md-3 col-sm-6 col-xs-12 wow animated bounceInUp part4">
                            <div class="mikh"> 
                                <div class="wow animated bounce mikh1">
                                    <img src="/images/logo4.png" onclick="playAudio('owlaud')"/>  
                                </div>
                            </div>
                            <div class="part4-1">
                                
                                <div class="head"><h4>دسترسی های سریع</h4></div>
                                <div class="complaint"><i class="material-icons mticon">ac_unit</i><a href="/complaint" >ثبت شکایات </a></div>
                                <div class="complaint"><i class="material-icons mticon">ac_unit</i><a href="/aboutus" >درباره ما </a></div>
                                <div class="complaint"><i class="material-icons mticon">ac_unit</i><a href="/tos">قوانین </a></div>
                                <div class="complaint"><i class="material-icons mticon">ac_unit</i><a href="/faq" >سوالات متداول </a></div>
								
                            
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 wow animated bounceInUp part1">
                          <div class="mikh"> 
                              <div class="wow animated bounce mikh1">
                                <img src="/images/logo1.png" onclick="playAudio('owlaud')"/>  
                              </div>
                            </div>  
                          <div class="part1-1">
                            
                              <div class="head"><h4>دانلود چوب شور</h4></div>
                              <div class="icon">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <img src="/images/android.png"/>
                                        </div>
                                        <div class="col-md-10 col-sm-10 col-xs-10 footdawn" >
                                            <a href="/download"> دانلود نسخه اندروید</a>                                       
                                        </div>
                                    </div>
                                </div>
                              <div class="icon">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <img src="/images/ios.png"/>
                                        </div>
                                        <div class="col-md-10 col-sm-10 col-xs-10 footdawn" >
                                            <a href="/download">دانلود نسخه IOS<span class="soondown">(به زودی!)</span></a>                                       
                                        </div>
                                    </div>
                                </div>
                            
                          
                            
                        
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 wow animated bounceInUp part3">
                            <div class="mikh"> 
                                <div class="wow animated bounce mikh1">
                                    <img src="/images/logo2.png" onclick="playAudio('owlaud')"/>  
                                </div>
                            </div>
                            <div class="part3-1">
                                
                                <div class="head"><h4>شبکه‌های اجتماعی</h4></div>
                                <div class="othericons">
                                    <a target="_blank" href="https://telegram.me/joinchat/BfGQGTvuOzrJstKdy82DBA">
                                        <div class="icon2">
                                            <img src="/images/telegram.png"/>
                                        </div>
                                    </a>
                                    <a target="_blank" href="https://instagram.com/mychoobshoor">
                                        <div class="icon2">
                                            <img src="/images/instagram.png"/>
                                        </div>
                                    </a>
                                    <a target="_blank" href="https://twitter.com/choobshoor">
                                        <div class="icon2">
                                            <img src="/images/twitter.png"/>
                                        </div>
                                    </a>
                                    <a target="_blank" href="https://aparat.com/choobshoor">
                                        <div class="icon2">
                                            <img src="/images/aparat.png"/>
                                        </div>
                                    </a>
                                    
                                </div>
                                <div class="othericons">
									<div>
                                            <img id='sizpnbqeapfuapfufukz' style='cursor:pointer' onclick='window.open("https://logo.samandehi.ir/Verify.aspx?id=92556&p=pfvluiwkdshwdshwgvka", "Popup","toolbar=no, scrollbars=no, location=no, statusbar=no, menubar=no, resizable=0, width=450, height=630, top=30")' alt='logo-samandehi' src='https://logo.samandehi.ir/logo.aspx?id=92556&p=bsiyodrfujynujynwlbq'/>
											<img src="/images/comodo_secure_seal_100x85_transp.png"/>
                                    </div>
								</div>
								
                            
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 wow animated bounceInUp part2">
                            <div class="mikh"> 
                                <div class="wow animated bounce mikh1">
                                    <img src="/images/logo3.png" onclick="playAudio('owlaud')"/>  
                                </div>
                            </div>
                            <div class="part2-1">
                                
                                <div class="head"><h4>تماس با ما</h4></div>
                                <div class="icon">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <img src="/images/soc (1).png"/>
                                        </div>
                                        <div class="col-md-10 col-sm-10 col-xs-10" style="line-height:1.7em;">
                                            تهران، خیابان کارگر شمالی، ضلع شمال غربی بلوار کشاورز، پلاک 81 ساختمان هاجر، واحد 10
                                        </div>
                                    </div>
                                  
                                </div>
                                <div class="icon">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <img src="/images/soc (2).png"/>
                                        </div>
                                        <div class="col-md-10 col-sm-10 col-xs-10">
                                            <a href="tel:02188337237">02188337237</a>                                       
                                        </div>
                                    </div>
                                </div>
                                <div class="icon">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <img src="/images/soc (3).png"/>
                                        </div>
                                        <div class="col-md-10 col-sm-10 col-xs-10">
                                            <a href="mailto:hello@choobshoor.com">hello@choobshoor.com</a>                                       
                                        </div>
                                    </div>
                            
                                </div>
                                
                            </div>
                        </div>
                     
                   

               
                        </div>
                    </div>
        
                </div>
        </div>
                <div class="elite"> تمامی حقوق اين سايت برای <a href="http://www.choobshoor.com/" target="_blank">چوب شور</a>  محفوظ است. طراحی و توسعه <a href="http://elitec.ir/" target="_blank">نشر الیت</a></div>
                
    <script type="text/javascript" src="https://choobshoor.com/livechat/php/app.php/widget-init.js"></script>
        
    
    </body>
</html>