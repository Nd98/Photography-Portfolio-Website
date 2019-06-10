$(document).ready(function(){

	var container = $('html');
		li = container.find('li');

	// Using the tzShutter plugin. We are giving the path
	// to he shutter.png image in the plugin folder and two
	// callback functions.
$('.img-thumbnail').click(function(){
	
	function fenil(){

	
	container.tzShutter({
		imgSrc: '../data/shutter.png',
		closeCallback: function(){

			// Cycling the visibility of the li items to
			// create a simple slideshow.

			li.filter(':visible:first').hide();
			
			if(li.filter(':visible').length == 0){
				li.show();
			}
			
			// Scheduling a shutter open in 0.1 seconds:
			setTimeout(function(){container.trigger('shutterOpen')},100);
		},
		loadCompleteCallback:function(){
			/*setInterval(function(){
				container.trigger('shutterClose');
			},4000);*/
			
			container.trigger('shutterClose');
		}
	});
}
setTimeout(fenil,5000);
});
	
	
});
