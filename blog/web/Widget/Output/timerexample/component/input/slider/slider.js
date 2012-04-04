// JavaScript Document


var sliderInput = function() {

	this.min = 1;
	this.max = 60;
	this.defaultValue = 5;
	this.selectedValue = 5;
	var _this = this;
	
	this.init = function() {
		$('#sliderInput1-slider').slider({
			animate: true,
			 min:this.min,
			 max:this.max,
			 step: 1,
			 value: this.defaultValue,
			 change: function(event, ui) {
				$('#sliderInput1-displayNb').html(ui.value+"mins");
				_this.selectedValue = ui.value;
			 }
		});	
	}
}