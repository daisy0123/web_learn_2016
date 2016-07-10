for (i = 1; i < 10; i++) {
	current = new Image();
	eval("current.src= 'images/current" + i + ".gif'");
	unanswered = new Image();
	eval("unanswered.src= 'images/unanswered" + i + ".gif'");
	right = new Image();
	eval("right.src= 'images/right" + i + ".gif'");
	wrong = new Image();
	eval("wrong.src= 'images/wrong" + i + ".gif'");

}

// set some global variables
rightAnswers = new Array("a", "d", "b", "d", "f", "h", "b", "d", "y");
numQuestions = rightAnswers.length;
currentQuestion = 1;
score = 0;
answeredElement = null;
formRef = "";
qTrackerRef = "";
var done = new Array();
for (i = 1; i < 10; i++) {
	done[i] = false;
}
count = 0;

// set global browser identification variables
layerRef = "document.getElementById('";
styleRef = ".style";
endLayerRef = "')";
formRef = "document.forms['";
endFormRef = "']";

function checkAnswer(q) {
	if (checkForAnswer(q)) {
		// determine actual answer

		eval("questionObj = " + formRef + "q" + q + "form" + endFormRef);
		answer = questionObj.elements[answeredElement].value;

		// see if answer was right
		if (answer == rightAnswers[currentQuestion - 1]) {
			score = score + 10;
			eval(qTrackerRef + layerRef + "wrong" + endLayerRef + styleRef + ".visibility = 'hidden'");
			eval(qTrackerRef + layerRef + "right" + endLayerRef + styleRef + ".visibility = 'visible'");
			updateQTracker('right', currentQuestion);
			done[q] = true;
			count++;
		} else {
			eval(qTrackerRef + layerRef + "right" + endLayerRef + styleRef + ".visibility = 'hidden'");
			eval(qTrackerRef + layerRef + "wrong" + endLayerRef + styleRef + ".visibility = 'visible'");
			updateQTracker('wrong', currentQuestion);
			done[q] = true;
			count++;
		}

		// move on to next question
		if (count<numQuestions) {
			oldQuestion = currentQuestion;
			for (i = 1; i <= numQuestions; i++) {
				if (!done[i]) {
					currentQuestion = i;
					break;
				}
			}
			nextQuestion(oldQuestion, currentQuestion);
		}else if(count==numQuestions){
			quizFinished();
		}
} else {
	// an answer wasn't chosen
	alert("Please choose one of the options.")
}
}

function checkForAnswer(q) {
	// Determine which radio button is selected
	// Buttons are elements, so we don't want to 
	// count the answer button as a radio element
	eval("questionObj = " + formRef + "q" + q + "form" + endFormRef);
	numRadioOptions = questionObj.elements.length - 1;

	// loop through all radio buttons for this question and
	// see if any of them are checked
	for (i = 0; i < numRadioOptions; i++) {
		if (questionObj.elements[i].checked) {
			answeredElement = i
			return true;
		}
	}
	return false;
}

function nextQuestion(oldQ, newQ) {
	// hide old question
	eval(layerRef + "q" + oldQ + endLayerRef + styleRef + ".visibility = 'hidden'");

	// show new question
	eval(layerRef + "q" + newQ + endLayerRef + styleRef + ".visibility = 'visible'");

	// update question tracker
	updateQTracker('current', newQ);
}

function updateQTracker(state, q) {
	eval(qTrackerRef + "document.images['t" + q + "'].src = 'images/" + state + q + ".gif'");

}

function quizFinished() {
	// hide old question & show "thank you" layer
	eval(layerRef + "q" + currentQuestion + endLayerRef + styleRef + ".visibility = 'hidden'");
	eval(layerRef + "thanks" + endLayerRef + styleRef + ".visibility = 'visible'");

	// display score
	formObj = document.forms['thanksForm'];
	formObj.endScore.value = score;
}

function select(q) {
	if (done[q]) {
		alert("you have finished!");
	} else {
		oldQuestion = currentQuestion;
		currentQuestion = q;
		nextQuestion(oldQuestion, currentQuestion);
		updateQTracker('unanswered', oldQuestion);
	}
}