<?php
session_start();
require_once 'functions.php';
$mainSlide='';
$owl='';
$groups='';
$contents='';
$pageTitle="محتوا";
if (!isset($_SESSION["uid"])){
//    header('Location: ./login.php');
//    exit;
}
//some change comment
$ogdesc='<meta property="og:description" content="چوبشور، سرزمین هیجان‌انگیز یادگیری همراه با سرگرمی‌های امن و جذاب - اخبار چوبشور را در این صفحه دنبال کنید." />';
$navbarcode = isset($_SESSION['uid'])?2:1;
$type='news';
$articles=GetArticles(10,'news',0);
$contents .= '
        <!--download-->
        <div class="download">
            <div class="ihead">
                   <h4>  اخبار</h4>
                    
            </div>
            <div class="container-fluid">
                <div class="row download1">
                    <div class="news">
                    ';
foreach($articles as $article){
    $contents .= '
                            <a href="/article/'.$article['id'].'"><div class="col-md-3 col-sm-6 col-xs-12 news1">
                                <div class="news2">
                                    <div class="newsimg">
                                        <img alt="'.$article['title'].'" src="'.$article['image'].'" class="img-responsive"/>
                                    </div>
                                    <div class="newstitle">
                                    '.$article['title'].'
                                    </div>
                                    <div class="newsdate">
                                       '.jDateTime::date("Y/m/d",$article['created']).' 
                                    </div>
                                </div>
                            </div></a>
                        ';
}
$contents .= '
                    </div>
                </div>
            </div>
        </div>
        
        
        
        
        <div class="charge2empty"></div>
';



require 'template.php';