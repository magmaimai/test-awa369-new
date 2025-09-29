jQuery(function($){
   
   "use strict";
   
   /* ==================================================
   Progress Bar
   ================================================== */
   
   $(document).ready(function(){ 
      
      $('.ve-progress-bar').each(function(){
         
         $(this).appear(function(){
            
            var percent = $(this).find('span').attr('data-width');
            var $endNum = parseInt($(this).find('span strong i').text());
            var $that = $(this);
            
            $(this).find('span').animate({
               'width' : percent + '%'
            },2500, 'easeOutCirc',function(){
            });
            
            $(this).find('span strong').animate({
               'opacity' : 1
            },3500);
            
            
            $(this).find('span strong i').countTo({
               from: 0,
               to: $endNum,
               speed: 1100,
               refreshInterval: 30,
               onComplete: function(){
                  
               }
            });   
            
            ////100% progress bar 
            if(percent === '100'){
               $that.find('span strong').addClass('full');
            }
            
         });
      });
      
   }); 
   
   /* ==================================================
   Circular Progress Bar
   ================================================== */
   
   $(document).ready(function(){
      
      var chart = $(".chart");
      
      $(chart).each(function() {
         
         $(this).appear(function(){
            
            var currentChart = $(this),
            thickness = currentChart.attr('thickness'),
            size = currentChart.attr('size');
            
            currentChart.easyPieChart({
               animate: 2000,
               lineWidth: thickness,
               size: size,
               scaleColor: false,
               onStep: function(from, to, percent) {
                  $(this.el).find('.percent').text(Math.round(percent));
               }
            });
            
         });
      });
      
   });
   
   /* ==================================================
   Counter
   ================================================== */
   
   $(document).ready(function(){
      
      var counter = $(".counter");
      
      $(counter).each(function() {
         
         $(this).appear(function(){
            
            var value = $(this).find('div.counter-data').attr('value');
            var speed = $(this).find('div.counter-data').attr('value-speed');
            var interval = $(this).find('div.counter-data').attr('value-interval');
            
            $(this).find('.counter-value').countTo({
               from: 0,
               to: value,
               speed: speed,
               refreshInterval: interval,
               onComplete: function(){
                  
               }
            });   
            
         });
      });
      
   });
   
   
   /* ==================================================
   Testimonial
   ================================================== */
   
   $(document).ready(function(){ 
      
      if($('.testimonial').length > 0 ){
         $('.testimonial').flexslider({
            animation:"slide",
            controlNav: true,
            directionNav: false, 
            controlsContainer: '.testimonials-container',
         });
      }
      
   });
   
   
   /* ==================================================
   Tweets
   ================================================== */
   
   $(document).ready(function(){
      
      if($('.twitter-feed .slides').length > 0 ){
         $('.twitter-feed').flexslider({
            animation:"slide",
            controlNav: false, 
            directionNav: false, 
            controlsContainer: '.twitter-feed',
         });
      }
      
   });
   
   
   /* ==================================================
   Portfolio
   ================================================== */
   
   // Filter Portfolio
   $(window).load(function(){ 
      
      if($('#portfolio-projects').length > 0){       
         
         var $grid = $('#portfolio-projects').isotope({
            // main isotope options
            itemSelector: '.item-project',
            // set layoutMode
            layoutMode: 'masonry',
            // options for masonry layout mode
            masonry: {
               columnWidth: '.item-project'
            }
         });
         
         
         // filter items when filter link is clicked
         var $optionSets = $('#portfolio-filter .option-set'),
         $optionLinks = $optionSets.find('a');
         
         $optionLinks.click(function(){
            var $this = $(this);
            // don't proceed if already selected
            if ( $this.hasClass('selected') ) {
               return false;
            }
            var $optionSet = $this.parents('.option-set');
            $optionSet.find('.selected').removeClass('selected');
            $this.addClass('selected');
            
            // make option object dynamically, i.e. { filter: '.my-filter-class' }
            var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
            // parse 'false' as false boolean
            value = value === 'false' ? false : value;
            options[ key ] = value;
            if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
               // changes in layout modes need extra logic
               changeLayoutMode( $this, options );
            } else {
               // otherwise, apply new options
               $grid.isotope( options );
            }
            
            return false;
         });
      }
      
   });
   
   // Set Portfolio Thumbnails Size
   $(window).load(function(){ 
      
      if($('.item-project').length > 0 ){
         $(".item-project").each(function () {
            var e = $(".project-name", this).height(),
            t = $(".project-name", this).width();
            $(".project-name .va", this).css("height", e).css("width", t);
         });
      }
      
   });
   
   
   /* ==================================================
   Team
   ================================================== */
   
   // Filter Team
   $(window).load(function(){  
      
      if($('#team-people').length > 0){    
         
         var $grid = $('#team-people').isotope({
            // main isotope options
            itemSelector: '.single-people',
            // set layoutMode
            layoutMode: 'masonry',
            // options for masonry layout mode
            masonry: {
               columnWidth: '.single-people'
            }
         });
         
         // filter items when filter link is clicked
         var $optionSets = $('#team-filter .option-set'),
         $optionLinks = $optionSets.find('a');
         
         $optionLinks.click(function(){
            var $this = $(this);
            // don't proceed if already selected
            if ( $this.hasClass('selected') ) {
               return false;
            }
            var $optionSet = $this.parents('.option-set');
            $optionSet.find('.selected').removeClass('selected');
            $this.addClass('selected');
            
            // make option object dynamically, i.e. { filter: '.my-filter-class' }
            var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
            // parse 'false' as false boolean
            value = value === 'false' ? false : value;
            options[ key ] = value;
            if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
               // changes in layout modes need extra logic
               changeLayoutMode( $this, options );
            } else {
               // otherwise, apply new options
               $grid.isotope( options );
            }
            
            return false;
         });
      }
      
   });
   
   // Set Team Thumbnails Size
   $(window).load(function(){
      
      if($('.single-people').length > 0 ){
         $(".single-people").each(function () {
            var e = $(".team-name", this).height(),
            t = $(".team-name", this).width();
            $(".team-name .va", this).css("height", e).css("width", t);
         });
      }
      
   });
   
   
   /* ==================================================
   Masonry Blog
   ================================================== */
   
   $(window).load(function(){  
      
      if($('.masonry-blog').length > 0){ 
         
         var $grid = $('.masonry-area').isotope({
            // main isotope options
            itemSelector: '.item-blog',
            // set layoutMode
            layoutMode: 'masonry',
            // options for masonry layout mode
            masonry: {
               columnWidth: '.item-blog'
            }
         });
         
      }
      
   });
   
   
   /* ==================================================
   FancyBox
   ================================================== */
   
   $(document).ready(function(){ 
      if($('.fancybox').length > 0 || $('.fancybox-media').length > 0 || $('.fancybox-various').length > 0){
         
         $(".fancybox").fancybox({           
            padding : 0,
            helpers : {
               title : { type: 'inside' },
            },
            afterLoad : function() {
               this.title = '<span class="counter-img">' + (this.index + 1) + ' / ' + this.group.length + '</span>' + (this.title ? '' + this.title : '');
            }
         });
         
         $('.fancybox-media').fancybox({
            padding : 0,
            helpers : {
               media : true
            },
            openEffect  : 'none',
            closeEffect : 'none',
            width       : 800,
            height      : 450,
            aspectRatio : true,
            scrolling   : 'no'
         });
         
         $(".fancybox-various").fancybox({
            maxWidth : 800,
            maxHeight   : 600,
            fitToView   : false,
            width    : '70%',
            height      : '70%',
            autoSize : false,
            closeClick  : false,
            openEffect  : 'none',
            closeEffect : 'none'
         });
      }
   });
   
   
}); //End Strict