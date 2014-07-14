<div class="slider-bootstrap"><!-- start slider -->
    	<div class="slider-wrapper theme-default">
            <div id="slider-nivo" class="nivoSlider">
                <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/nike4.png"  alt="" title="" />
                <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/nike5.png"  alt="" title="" />
            </div>
        </div>
</div> 
 <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl;?>/js/nivo-slider/jquery.nivo.slider.pack.js"></script>
    
     <script type="text/javascript">
    $(function() {
        $('#slider-nivo').nivoSlider({
			effect: 'boxRain',
			manualAdvance:false,
			controlNav: false
			});
    });
 </script> 

   
    <div class="shout-box">
        <div class="shout-text">
          <h1>Greatest website ever</h1>
          <p>We work very hard to bring you the best website themes.<br> All our themes are responsive and look great on any device.</p>
        </div>
    </div>
       <!--<script type="text/javascript">
    $(document).ready(function() {
        $('#slider-nivo2').nivoSlider();
    });
    </script>-->