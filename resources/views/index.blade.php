@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <!-- section about start -->
	<div class="about_section">
		<div class="about_text">
			<div class="container">
				<h1 class="about_taital_1"><strong><span style="color: #f7941d;">About</span> Dogs</strong></h1>
				<p class="magna_text"> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
				<div class="about_bt">
					<button class="more_bt">Read More</button>
				</div>
				<div class="about">
					<h1 class="numbar_text">02</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- section about end -->
	<!-- section gallery start -->
    <div class="gallery_main layout_padding">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12">
    				<h1 class="about_taital"><strong><span style="color: #ffffff;">Our</span> Dogs</strong></h1>
				    <p class="sed_text"> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>

    			</div>
    		</div>
    		<div class="gallery_images">
    			<div class="row">
    				<div class="col-sm-7">
						<div class="gallery_blog">
                           <img src="images/gallery-img1.jpg" style="max-width: 100%; height: 300px; width: 100%;">
                        <div class="overlay">
                            <div class="text"><strong>PuppyDogPetAnimal</strong></div>
                        </div>
					    </div>
    				</div>
    				<div class="col-sm-5">
						<div class="gallery_blog">
                           <img src="images/gallery-img2.jpg" style="max-width: 100%; height: 300px; width: 100%;">
                        <div class="overlay">
                            <div class="text"><strong>PuppyDogPetAnimal</strong></div>
                        </div>
					    </div>
    				</div>
    			</div>
    		</div>
    		<div class="gallery_images">
    			<div class="row">
    				<div class="col-sm-5">
						<div class="gallery_blog">
                           <img src="images/gallery-img3.jpg" style="max-width: 100%; width: 100%;">
                        <div class="overlay">
                            <div class="text"><strong>PuppyDogPetAnimal</strong></div>
                        </div>
					    </div>
    				</div>
    				<div class="col-sm-7">
						<div class="gallery_blog">
                           <img src="images/gallery-img4.jpg" style="max-width: 100%; height: 300px; width: 100%;">
                        <div class="overlay">
                            <div class="text"><strong>PuppyDogPetAnimal</strong></div>
                        </div>
					    </div>
						<div class="gallery_blog">
                           <img src="images/gallery-img5.jpg" style="max-width: 100%; height: 297px; width: 100%;">
                        <div class="overlay">
                            <div class="text"><strong>PuppyDogPetAnimal</strong></div>
                        </div>
					    </div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <div class="gallery_section_2">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-8">
    				<h1 class="pet_taital">Pet adoption be part of something beautiful</h1>
    				<p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit </p>
    			<div class="banner_bt">
					<button class="dog_bt">Read More</button>
				</div>
				<div class="box_3">
					<h1 class="numbar">03</h1>
				</div>
    			</div>
    			<div class="col-sm-4">
    				<div class="dog_img"><img src="images/dog-img.png" style="max-width: 100%;"></div>
    			</div>
    		</div>
    	</div>
    </div>
	<!-- section gallery end -->
	<!-- section get in touch start -->
    <div class="touch_section">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12">
				    <h1 class="get_taital"><strong><span style="color: #ffffff;">Contact</span>  Us</strong></h1>
    			</div>
    		</div>
    		<div class="email_box">
                    <div class="input_main">
                       <div class="container">
                          <form action="/action_page.php">
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Name" name="Name">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Your Phone Numbar" name="Name">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Your Email" name="Email">
                            </div>

                            <div class="form-group">
                                <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                            </div>
                          </form>
                       </div>
                       <div class="send_btn">
                        <button type="button" class="main_bt"><a href="#">Send</a></button>
                       </div>
                    </div>
    		</div>
    	</div>
    </div>
    <div class="touch_section_2">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12">
    				<h1 class="our_texts">Our Newsletter</h1>
    				<div class="input-group mb-3">
                        <input class="email_bt" type="text" class="form-control" placeholder="Enter your email">
                     <div class="input-group-append">
                        <button class="subscribe_bt" class="btn btn-primary" type="Subscribe">Subscribe</button>
                     </div>
                    </div>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- section get in touch end -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
