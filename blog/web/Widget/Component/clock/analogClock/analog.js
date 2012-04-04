// JavaScript Document

var analogClock = function () {
	this.intMinutes = null;
	this.intSeconds = null;
	this.startTime = 5;
	
	this.launchCountdown = function () {
		this.resetClock();
		
		var secondsVal = this.startTime * 60;
	
		this.intSeconds = setInterval( function() {
			if(secondsVal <= 0) {
				this.resetClock();
			}
			var seconds = secondsVal%60;
			var sdegree = seconds * 6;
			var srotate = "rotate(" + sdegree + "deg)";
			
			$("#@[id]-sec").css({"-moz-transform" : srotate, "-webkit-transform" : srotate});
			secondsVal = secondsVal - 1;
		}, 1000 );
		  
		this.intMinutes = setInterval( function() {
			var mins = Math.ceil(secondsVal/60);
			var mdegree = mins * 6;
			var mrotate = "rotate(" + mdegree + "deg)";
			$("#@[id]-min").css({"-moz-transform" : mrotate, "-webkit-transform" : mrotate});
		}, 1000 );
	};
	
	this.resetClock = function () {
		clearInterval(this.intSeconds);
		clearInterval(this.intMinutes);
	}
}