<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="fonts.googleapis.com/css?family=Hind"; rel="stylesheet">

    <!-- Title -->
    <title>Newsup24x7 | Latest News  </title>


    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body style="font-family: 'Hind',sans-serif;">
    <!-- ##### Header Area Start ##### -->
    <!-- ##### Header Area End ##### -->
   <?php include 'nav.php' ?>
    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-8">
                    <!-- Breaking News Widget -->
                    <div class="breaking-news-area d-flex align-items-center">
                        <div class="news-title">
                            <p>ताज़ा खबर</p>
                        </div>
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                <li><a href="#">प्रियंका गांधी वाड्रा कांग्रेस मुख्यालय में श्री गणेश करती हैं</a></li>
                                <li><a href="#">बसपा-सपा पिछले चार लोकसभा चुनावों में यूपी की इन 11 सीटों को जीतने में नाकाम रही है</a></li>
                                <li><a href="#">SC में, मंदिर बोर्ड सबरीमाला में महिलाओं के प्रवेश का समर्थन करता है</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Breaking News Widget -->
                    <div class="breaking-news-area d-flex align-items-center mt-15">
                        <div class="news-title title2">
                            <p>अंतरराष्ट्रीय</p>
                        </div>
                        <div id="internationalTicker" class="ticker">
                            <ul>
                                <li><a href="#">भारत सुनिश्चित करता है कि कश्मीर पर पाकिस्तान का लंदन कार्यक्रम एक फ्लॉप शो बन जाए</a></li>
                                <li><a href="#">पेरिस क्षेत्र में भारी आग, 8 की मौत</a></li>
                                <li><a href="#">यह अमेरिकी राज्य 100 के तहत किसी के लिए सिगरेट पर प्रतिबंध लगाना चाहता है</a></li>
                            </ul>
                        </div>
                    </div>
                </div>


    <!-- ##### Featured Post Area Start ##### -->
    <div class="featured-post-area" style="margin-top:1em;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-8">
                    <div class="row">

                        <!-- Single Featured Post -->
                        <div class="col-12 col-lg-11">
                          <?php
                          include 'connect.php';
                          $query = "SELECT * FROM mainpost where main='YES' order by post_id DESC LIMIT 2;";
                          $result = mysqli_query($conn, $query);
                          while($row = mysqli_fetch_assoc($result)) {

                                     echo "
                                     <div class=\"single-blog-post featured-post\">
                                         <div class=\"post-thumb\">
                                             <a href=\"#\"><img src=\"".$row['image']."\" style=\"width:80%;height:80%;\" alt=\"\"></a>
                                         </div>
                                         <div class=\"post-data\">
                                             <a href=\"#\" class=\"post-catagory\">राजनीति</a>
                                             <a href=\"#\" class=\"post-title\">
                                                 <h6>".$row['title']."</h6>
                                             </a>
                                             <div class=\"post-meta\">
                                                 <p class=\"post-author\">- <a href=\"#\">संवाददाता</a></p>
                                                 <p class=\"post-excerp\"><span style=\"font-weight:bold;\">".substr($row['article'], 0, 1000)."<a href=\"news.php?var=".$row['post_id']."\" style=\"font-size:17px;text-decoration: none;color:#A13123;font-weight:bold;\"> और पढो...</a></p>

                                             </div>
                                         </div>
                                     </div>
                                     ";

                          }

                           ?>

                        </div>


                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3" style="margin-top:5em;">
                    <div class="section-heading">
                        <h6>राष्ट्रीय पसंद </h6>
                    </div>

                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex" style="margin-top: -5em;">
                        <div class="post-thumb">
                            <a href="#"><img src="img/bg-img/19.png" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-catagory">अर्थव्यवस्था</a>
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <h6> वोडाफोन आइडिया का शुद्ध घाटा 5,005 करोड़ रुपये हो गया</h6>
                                </a>
                                <p class="post-date"><span>10:00 PM</span> | <span>फ़रवरी 06</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="#"><img src="img/bg-img/politics1.jpg" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-catagory">राजनीति</a>
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <h6>लोकसभा चुनाव लड़ने के लिए हार्दिक पटेल; कांग्रेस का कहना है कि पाटीदार नेता में रस्सी पर बातचीत</h6>
                                </a>
                                <p class="post-date"><span>8:00 PM</span> | <span>फ़रवरी 06</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="#"><img src="img/bg-img/21.jpg" alt="" style="width:100%;height:10%;"></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-catagory">स्वास्थ्य</a>
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <h6>क्या हम 'ऐसे युग के निकट आ रहे हैं जहाँ कोई एंटीबायोटिक्स काम नहीं करते हैं?'</h6>
                                </a>
                                <p class="post-date"><span>4:00 PM</span> | <span>फ़रवरी 06</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="#"><img src="img/bg-img/22.jpg" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-catagory">मनोरंजन</a>
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <h6>रोहित शेट्टी और फराह खान ने बॉलीवुड की 'सबसे बड़ी एक्शन-कॉमेडी' के लिए हाथ मिलाया</h6>
                                </a>
                                <p class="post-date"><span>6:00 PM</span> | <span>फ़रवरी 06</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="#"><img src="img/bg-img/23.jpg" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-catagory">यात्रा</a>
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <h6>एयर इंडिया 979 रुपये से उड़ान टिकट के साथ गणतंत्र दिवस की बिक्री बंद कर देता है। यहां विवरण</h6>
                                </a>
                                <p class="post-date"><span>2:00 PM</span> | <span>फ़रवरी 05</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="#"><img src="img/bg-img/24.jpg" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-catagory">टैकनोलजी</a>
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <h6>फेसबुक ने डिजिटल स्किलिंग का किया खुलासा, 5 में मेंटरशिप प्रोग्राम ।। </h6>
                                </a>
                                <p class="post-date"><span>7:00 AM</span> | <span>फ़रवरी 14</span></p>
                            </div>
                        </div>
                    </div>

                <div class="section-heading" style="margin-top:15em;">
                        <h6>दुनिया भर में</h6>
                    </div>

                    <div class="single-blog-post small-featured-post d-flex" style="margin-top:-5em;">
                        <div class="post-thumb">
                            <a href="#"><img src="img/bg-img/g20.jpg" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-catagory">राजनीति</a>
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <h6>G20 शिखर सम्मेलन: टैरिफ को लेकर अमेरिका और चीन के बीच व्यापार तनातनी के बीच विश्व नेताओं ने अनिच्छा से ट्रम्प को झुकाया</h6>
                                </a>
                                <p class="post-date"><span>12:20 PM</span> | <span>फ़रवरी 04</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="#"><img src="img/bg-img/sports.jpg" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-catagory">खेल</a>
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <h6>दक्षिण अफ्रीका ने अंतिम टी 20 में पाकिस्तान को 168 पर रोक दिया</h6>
                                </a>
                                <p class="post-date"><span>10:00 AM</span> | <span>फ़रवरी 05</span></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ##### Featured Post Area End ##### -->

    <!-- ##### Popular News Area Start ##### -->
    <div class="popular-news-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="section-heading">
                        <h6>ताज़ा खबर </h6>
                    </div>

                    <div class="row">

                        <!-- Single Post -->
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post style-3">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/12.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">अर्थव्यवस्था</a>
                                    <a href="#" class="post-title">
                                        <h6>Real Estate Prices to fall soon...</h6>
                                    </a>
                                    <div class="post-meta d-flex align-items-center">
                                        <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                                        <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Post -->
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post style-3">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/13.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">अर्थव्यवस्था</a>
                                    <a href="#" class="post-title">
                                        <h6>Dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>
                                    </a>
                                    <div class="post-meta d-flex align-items-center">
                                        <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                                        <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Post -->
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post style-3">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/14.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">अर्थव्यवस्था</a>
                                    <a href="#" class="post-title">
                                        <h6>Dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>
                                    </a>
                                    <div class="post-meta d-flex align-items-center">
                                        <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                                        <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Post -->
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post style-3">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/15.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">अर्थव्यवस्था</a>
                                    <a href="#" class="post-title">
                                        <h6>Dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>
                                    </a>
                                    <div class="post-meta d-flex align-items-center">
                                        <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                                        <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="section-heading">
                        <h6>खबर </h6>
                    </div>
                    <!-- Popular News Widget -->
                    <div class="popular-news-widget mb-30">
                        <h3>4 सबसे लोकप्रिय समाचार</h3>

                        <!-- Single Popular Blog -->
                        <div class="single-popular-post">
                            <a href="#">
                                <h6><span>1.</span> Amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales.</h6>
                            </a>
                            <p>April 14, 2018</p>
                        </div>

                        <!-- Single Popular Blog -->
                        <div class="single-popular-post">
                            <a href="#">
                                <h6><span>2.</span> Consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer.</h6>
                            </a>
                            <p>April 14, 2018</p>
                        </div>

                        <!-- Single Popular Blog -->
                        <div class="single-popular-post">
                            <a href="#">
                                <h6><span>3.</span> Adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo.</h6>
                            </a>
                            <p>April 14, 2018</p>
                        </div>

                        <!-- Single Popular Blog -->
                        <div class="single-popular-post">
                            <a href="#">
                                <h6><span>4.</span> Eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>
                            </a>
                            <p>April 14, 2018</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- ##### Popular News Area End ##### -->

    <!-- ##### Video Post Area Start ##### -->
    <div class="section-heading">
                        <h6> देखिए</h6>
                    </div>

    <div class="video-post-area bg-img bg-overlay" style="margin-top: -5em;margin-bottom: 6em;">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Video Post -->
                <div class="col-12 col-sm-6 col-md-4">
                    <h3 style="color:white;">साला विमान के मलबे से बरामद शव: ब्रिटेन के जांचकर्ता</h3>
                    <div class="single-video-post">
                        <img src="img/bg-img/video3.jpg" alt="">
                        <!-- Video Button -->
                        <div class="videobtn">
                            <a href="https://www.youtube.com/watch?v=DVBKpPyNj_A" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Video Post -->
                <div class="col-12 col-sm-6 col-md-4">
                    <h4 style="margin-bottom: 2em;color:white;">ईशा अंबानी के जुड़वां भाई आकाश अंबानी, श्लोका मेहता की शादी मार्च में हो रही है</h4 >
                    <div class="single-video-post">
                        <img src="img/bg-img/video2.jpg" alt="">
                        <!-- Video Button -->
                        <div class="videobtn">
                            <a href="https://www.youtube.com/watch?v=5BQr-j3BBzU" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Video Post -->
                <div class="col-12 col-sm-6 col-md-4">
                    <h3 style="color:white;">पीएम इमरान खान से मिलने के लिए स्केच कलाकार सोनिया कतर से उड़ान भरती हैं</h3>
                    <div class="single-video-post">
                        <img src="img/bg-img/video3.jpg" alt="">
                        <!-- Video Button -->
                        <div class="videobtn">
                            <a href="https://www.youtube.com/watch?v=Qdd8kWH0fok" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Single Video Post -->
                <div class="col-12 col-sm-6 col-md-4">
                	<h3 style="color:white;">HEADING4</h3>
                    <div class="single-video-post">

                        <img src="img/bg-img/video1.jpg" alt="">
                        <!-- Video Button -->
                        <div class="videobtn">
                            <a href="https://www.youtube.com/watch?v=5BQr-j3BBzU" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Single Video Post -->
                <div class="col-12 col-sm-6 col-md-4">
                	<h3 style="color:white;">HEADING5</h3>
                    <div class="single-video-post">

                        <img src="img/bg-img/video3.jpg" alt="">
                        <!-- Video Button -->
                        <div class="videobtn">
                            <a href="https://www.youtube.com/watch?v=5BQr-j3BBzU" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Video Post Area End ##### -->




    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>
