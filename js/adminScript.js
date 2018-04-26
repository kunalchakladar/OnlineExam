window.onload = function () {
	document.getElementById("addStudent").onclick = function() {
		var studentForm = document.getElementById("studentForm");
		studentForm.style.visibility ='visible';
		var addStudentButton = document.getElementById("center")
		addStudentButton.style.visibility = 'hidden';
	}
}