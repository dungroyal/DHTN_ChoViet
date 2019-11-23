      
      
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
                                        <div id="googleMap" style="width:100%;height:330px;"></div>
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
                                            <form method="post" action="model/sendmailcontact.php">
                                                <div class="name_email_form clearfix">
                                                    <div class="left_comment">
                                                        <p>Name</p>
                                                        <input type="text" name="name">
                                                    </div>
                                                    <div class="left_comment">
                                                        <p>E-mail </p>
                                                        <input type="email" name="email">
                                                    </div>
                                                    <div class="left_comment">
                                                        <p>Tiêu Đề  </p>
                                                        <input type="text" name="topic">
                                                    </div>
                                                    
                                                        <p>Message  </p>
                                                        <textarea name="message" rows="2" cols="114"></textarea>
                                                        <input name="btn_submit" type="submit">
                                                    
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