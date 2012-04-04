// Temporary component functions (normally in called libaries)

// None

// Generated for all widgets by the ARC WIDGaT service

// Component function instances

{//Declare new component instances (and assign initial field values if not null)

	var analogClock1 = new analogClock("analogClock1");

	var sliderInput1 = new sliderInput("sliderInput1");
	sliderInput1.min="0";
	sliderInput1.max="100";
	sliderInput1.defaultValue="25";

}//@[<components>]
		
function init() { //initialise components on document load
  
	analogClock1.init();
	sliderInput1.init();
}//@[<initialise>]

function pipes() { // add pipes (component connectors)

	analogClock1.startTime=sliderInput1.selectedValue;
}//@[<pipes>]



