<div class="row mb content">
            
            <div class="box-left mr">
                <div class="row mb">
                    <div class="banner">
                        <!-- Slideshow container -->
                    <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="./view/images/1.jpg" style="width:100%">
                    <div class="text"></div>
                    </div>

                    <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="./view/images/2.jpg" style="width:100%">
                    <div class="text"></div>
                    </div>

                    <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="./view/images/3.jpg" style="width:100%">
                    <div class="text"></div>
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>

                    <!-- The dots/circles -->
                    <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    </div>

                    </div>
            </div>


            <div class="row mb flex-item">
                <?php
                    foreach ($listspnew as $spnew) {
                        extract($spnew);
                        $linkspct = 'index.php?act=sanphamct&&idsp='.$id;
                        $hinh = $img_path.$img;
                        echo '<div class="item">
                        <a href="'.$linkspct.'"><img src="'.$hinh.'" alt=""></a>
                        <div class="info-item">
                        <p>'.$price.'d</p>
                        <a href="'.$linkspct.'">'.$name.'</a>
                        </div>
                     <div class="row btnaddtocart">
                            <form action="index.php?act=addtocart" method= post>
                                    <input type="hidden" name="id" value= "'.$id.'">
                                    <input type="hidden" name="name" value= "'.$name.'">
                                    <input type="hidden" name="img" value= "'.$img.'">
                                    <input type="hidden" name="price" value= "'.$price.'">
                                  
                                    <input type="submit"  name="addtocart" value= "Thêm vào giỏ ">
                                    <i class="fa fa-cart-shopping"></i>
                                    
                            </form>
                     </div>
                    </div>';
                    }
                ?>
                    
            </div>
            </div>
            <div class="box-right">
                <?php
                 include "boxright.php"; 

                ?>
            </div>
        </div>