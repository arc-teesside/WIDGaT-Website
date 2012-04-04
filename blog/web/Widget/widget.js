﻿{	
	id: "4xNb2vG1",
	version: "1.2",
	width: 320,
	height: 460,
	name: "Timer widget",
	description: "Simple countdown widget created using WIDGaT",
	usecase: {
		persona: "A persona",
		scenario: "A scenario",
		keywords: "timer,countdown,one click"
	},
	icon: "images/icon.png",
	authors: [{
		name: "Franck Perrin",
		email: "f6146557@live.tees.ac.uk",
		link: "http://arc.tees.ac.uk",
		organization: "ARC Teesside University"
	}],
	licence: "Creative Commons Non Commercial ShareAlike 3.0 http://creativecommons.org/licenses/by-nc-sa/3.0/",
	
	pipes: [{
		from: 'sliderInput1.selectedValue',
		to: 'analogClock1.startTime'
	}, {
		from: 'buttonInput1.action',
		to: 'analogClock1.launchCountdown'
	}],
	
	components: [
		{
			id: "analogClock1",
			className: "analogClock",
			name : "Analog Clock",
			description: "Analog looking clock timer using CSS3 for animation",
			category: 'clock',
			placeHolder : 'placeholder1',
			authors: [{
				name: "Franck Perrin",
				email: "f.perrin@tees.ac.uk",
				link: "http://arc.tees.ac.uk",
				organisation: "ARC Teesside University"
			}],
			html: "analog.html",
			javascript: "analog.js",
			stylesheet: "analog.css",
			
			attributes: [{
				shortName: "startTime",
				name: "Starting Time",
				type: "Number",
				input: true,
				required: true
			}],
			
			actions: [{
				shortName: "launchCountdown",
				name: "Launch Countdown"
			}, {
				shortName: "resetClock",
				name: "Reset clock"
			}],
			
			guidances: [
				{
					priority: "high",
					text: "The clock needs a starting time"
				}
			]
		}, {
			id: "sliderInput1",
			className: "sliderInput",
			name : "Slider",
			description: "A slider to select a value",
			category: 'input',
			placeHolder : 'placeholder2',
			icon: 'http://localhost/Component/slider/icon.png',
			authors: [{
				name: "Franck Perrin",
				email: "f.perrin@tees.ac.uk",
				link: "http://arc.tees.ac.uk",
				organization: "ARC Teesside University"
			}],
			
			dependencies: [
				{ name: "jquery-ui" }
			],
			
			html: "slider.html",
			javascript: "slider.js",
			stylesheet: "slider.css",
			
			attributes: [{
					shortName: "min",
					name: "Minimum value",
					type: "Number",
					value: 0
				}, {
					shortName: "max",
					name: "Maximum value",
					type: "Number",
					value: 100
				}, {
					shortName: "defaultValue",
					name: "Default value",
					type: "Number",
					value: 25
				}, {
					shortName: "selectedValue",
					name: "Selected value",
					type: "Number",
					output: true
			}]
		}, {
			id: "buttonInput1",
			className: "buttonInput",
			name : "Button",
			description: "HTML button",
			category: 'input',
			placeHolder : 'placeholder3',
			icon: 'http://localhost/Component/button/icon.png',
			authors: [{
				name: "Franck Perrin",
				email: "f.perrin@tees.ac.uk",
				link: "http://arc.tees.ac.uk",
				organization: "ARC Teesside University"
			}],
			
			html: "button.html",
			
			attributes: [{
					shortName: "text",
					name: "Display text",
					type: "String",
					value: "Start Timer"
				}, {
					shortName: "action",
					name: "Action",
					type: "String",
					input: true,
					required: true
				}
			],
			
			guidances: [
				{
					priority: "high",
					text: "The button requires an action"
				}
			]
		}
	]
}
	