@extends('layouts.builder')

@section('styles')
<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<link href="{{ IncludeAsset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ IncludeAsset('css/owl.carousel.css') }}" rel="stylesheet">
<link href="{{ IncludeAsset('css/owl.theme.default.min.css') }}" rel="stylesheet">
<link href="{{ IncludeAsset('css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ IncludeAsset('snippets-assets/minimalist-basic/content-bootstrap.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ IncludeAsset('css/style.css') }}" rel="stylesheet">
@endsection

@section('header')



@endsection
@section('wrapper')

   <div class="is-section is-light-text is-box is-bg-grey is-section-100">
		<div class="is-overlay">
			<div class="is-overlay-bg" style="background-image:url(http://admin.frezit.com/contentbuilder/contentbox/images/sample.jpg)"></div>
			<div class="is-overlay-color"></div>
			<div class="is-overlay-content"></div>
		</div> 
		<div class="is-boxes">
			<div class="is-box-centered is-opacity-90">
				<div class="is-container is-builder container-fluid">
					<div class="row">
						<div class="col-md-6">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus leo ante, consectetur sit amet vulputate vel, dapibus sit amet lectus.</p>
						</div>
						<div class="col-md-6">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus leo ante, consectetur sit amet vulputate vel, dapibus sit amet lectus.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
@section('footer')

        <!-- Back to top -->    
        <a href="#" class="back-to-top" id="back-to-top"> <i class="fa fa-angle-up"></i> </a>


        <!-- js placed at the end of the document so the pages load faster -->
        <script src="{{ IncludeAsset('js/jquery-2.1.4.min.js') }}"></script>
        <script src="{{ IncludeAsset('js/bootstrap.min.js') }}"></script>
        <!-- Jquery easing -->                                                      
        <script type="text/javascript" src="{{ IncludeAsset('js/jquery.easing.1.3.min.js') }}"></script>

        <!-- Owl Carousel -->                                                      
        <script type="text/javascript" src="{{ IncludeAsset('js/owl.carousel.min.js') }}"></script>

        <!--sticky header-->
        <script type="text/javascript" src="{{ IncludeAsset('js/jquery.sticky.js') }}"></script>

        <!--common script for all pages-->
        <script src="{{ IncludeAsset('js/jquery.app.js') }}"></script>

        <script type="text/javascript">
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                autoplay: true,
                autoplayTimeout: 4000,
                responsive:{
                    0:{
                        items:1
                    }
                }
            })
        </script>
@endsection