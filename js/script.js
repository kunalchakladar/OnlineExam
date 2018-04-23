window.onload = function () {
	document.getElementById("adminLoginButton").onclick = function() {
		var adminForm = document.getElementById('adminForm');
		adminForm.style.visibility ='visible';
		var adminLoginButton = document.getElementById("adminLoginButton");
		adminLoginButton.style.visibility = 'hidden';
	}
}