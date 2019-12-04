      
      
        <!-- Contact start -->
        <div class="contact-area">
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left">
                            <ul class="breadcrumb">
                                <li><a href="index.php">Home</a><span> - </span></li>
                                <li class="active">contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> 
            
            <div class="google-map-area">
                <div class="container">          
                    <div class="row">
                        <div class="col-xs-12">   
                            <div class="contact-us-area">
                                <!-- google-map-area start -->
                                <div class="google-map-area">
                                    <!--  Map Section -->
                                    <div id="contacts" class="map-area">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.9973650244765!2d106.69867841480107!3d10.81151289229775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175289544cc846b%3A0xd620973063bc8543!2zMzM0IENodSBWxINuIEFuLCBQaMaw4budbmcgMTIsIELDrG5oIFRo4bqhbmgsIEjhu5MgQ2jDrSBNaW5o!5e0!3m2!1svi!2s!4v1560093215229!5m2!1svi!2s"
                float:left width="100%" height="470" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                </div>    
                            </div>
                        </div>   
                    </div>
                </div>
            </div>

            <div class="form-newsletter-area"> 
                <div class="container">         
                    <div class="row adjust-padding">
                        <div class="col-md-6 col-xs-12">
                            <!-- contact us form start -->
                            <div class="contact-us-form">
                                <div class="section-heading">
                                    <h3>contact form</h3>
                                    <p class="thank-you">Thank You....Just got the message....Will contact you soon....</p>
                                </div>  
                                <div class="contact-form">
                                    <div class="leave-a-comment">
                                        <div class="leave_comment"> 
                                            <form method="post">
                                                <div class="name_email_form clearfix">
                                                    <div class="left_comment">
                                                        <p>Họ và tên</p>
                                                        <input type="text" name="name">
                                                    </div>
                                                    <div class="left_comment">
                                                        <p>E-mail </p>
                                                        <input type="email" name="email">
                                                    </div>
                                                    <div class="left_comment">
                                                        <p>Số điện thoại </p>
                                                        <input type="mes" name="phone">
                                                    </div>
                                                    <div class="left_comment">
                                                        <p>Tiêu Đề  </p>
                                                        <input type="text" name="topic">
                                                    </div>
                                                    
                                                        <p>Message  </p>
                                                        <textarea name="message" rows="2" cols="114"></textarea>
                                                        <input name="lienhe" type="submit">
                                                        <center>
                                                            <?php
                                                            if(isset($erro)){
                                                                echo $erro;
                                                            }
                                                            ?></center>
                                                        </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </div>    
                       <!-- contact us form end -->  
                        <div class="col-md-6 col-xs-12">
                            <!-- newsletter start -->
                            <div class="newsletter-area">
                                <div class="section-heading">
                                    <h3>newsletters</h3>
                                </div>
                                <div class="newsletter-box">
                                    <form action="#">
                                        <input type="text" placeholder="Type your E-mail address"><br>
                                        <button type="submit">Subscribe Now</button>
                                    </form>
                                    <div class="subscribing">
                                        <label class="checkbox-title">
                                            <input type="checkbox" name="subscribe" value="bank" id="transfer">By Subscribing to our newsletter you agree to receive emails<br> from us. 
                                        </label>
                                    </div>
                                </div>
                            </div>                                
                        </div>
                    </div>    
                </div>
            </div>  
        </div>
        <!-- Contact end --> 