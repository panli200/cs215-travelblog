// check username field
/**
* no spaces or other non-word characters	
*/
function checkUserName(event) {
	
	var span = event.currentTarget.parentNode.querySelector('span');
	var usernameInput = event.currentTarget;
	var loginForm = document.getElementById('loginForm');
	// Empty input 
	if(usernameInput.value == ""){
		span.innerText = "Username field is required...";
		span.style.color = "red";
		return false;
	} else {
		var patternSpaceWord = /^[a-zA-Z0-9_]+$/;
		var isValid = patternSpaceWord.test(usernameInput.value);
		if (!isValid) {
			span.innerText = "No spaces or other non-word characters...";
			span.style.color = "red";
			return false;
		} else {
			span.innerText = "";
		}
	}
	return true;
}

// Check Password field
/*
	8 characters or longer, no spaces
*/
function checkPwd(event) {
	var passwordInput = event.currentTarget;
	var span = passwordInput.parentNode.querySelector('span');
	span.style.color = "red";
	if(passwordInput.value == "") {
		span.innerText = "Password field is required...";
		return false;
	} else {
		if(passwordInput.value.length < 8) {
			span.innerText = "Password should be longer than 8...";
			return false;
		} 
		var patternNoSpace = /\W/g;
		var isValid = patternNoSpace.test(passwordInput.value);
		if(!isValid) {
			span.innerText = "At least one non-letter character...";
			return false;
		} else {
			span.innerText = "";
		}
	}
	return true;
}


/**
 * Login Form submit checking
 */
function checkLoginForm(event) {
	// Check if error messages still show on the page
	var usernameInfo = document.getElementById('usernameInfo').innerText;
	var passwordInfo = document.getElementById('passwordInfo').innerText;
	if(usernameInfo != "") {
		event.preventDefault();
		document.getElementById('username').style.borderColor = "red";
	}
	if(passwordInfo != "") {
		event.preventDefault();
		document.getElementById('password').style.borderColor = "red";
	}
}


// Check email address
/**
 * Should match email format
 * @param {email} event 
 */
function checkEmail(event) {
	var emailInput = event.currentTarget;
	var regex = /^(([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}){1,25})+([;.](([a-zA-Z0-9_\-\.]+)@{[a-zA-Z0-9_\-\.]+0\.([a-zA-Z]{2,5}){1,25})+)*$/;
	var emailInfo = document.getElementById('emailInfo');
    if(!regex.test(emailInput.value)){
		emailInfo.innerText = "Please provide a valid email address";
		emailInfo.style.color = "red";
		return false;
    } else {
		emailInfo.innerText = "";
		return true;
	}
}

// Check real name 
/** Should follow the format: John Smith */
function checkRealName(event) {
	var realnameInput = event.currentTarget;
	var realnameInfo = document.getElementById('realnameInfo');
	var regex = /^[A-Z][a-z]* [A-Z][a-z]*$/;
	if(!regex.test(realnameInput.value)) {
		realnameInfo.innerText = "Please correct your realname field following First Last format.";
		realnameInfo.style.color = "red";
		return false;
	} else {
		realnameInfo.innerText = "";
		return true;
	}
}

// Match two password
function confirmPassword(event) {
	var confirmPasswordInput = event.currentTarget;
	var confirmInfo = document.getElementById('confirmInfo');
	if(confirmPasswordInput.value != document.getElementById('password').value) {
		confirmInfo.innerText = "Password doesn't match.";
		confirmInfo.style.color = "red";
		return false;
	} else {
		confirmInfo.innerText = "";
		return true;
	}
}

// Sign up form validation
function checkSignUpForm(event) {
	var usernameInfo = document.getElementById('usernameInfo');
	var emailInfo = document.getElementById('emailInfo');
	var realnameInfo = document.getElementById('realnameInfo');
	var passwordInfo = document.getElementById('passwordInfo');
	var confirmInfo = document.getElementById('confirmInfo');
	switch (true) {
		case (usernameInfo.innerText != ""): 
			document.getElementById('username').style.borderColor = "red";
			event.preventDefault();
		case (emailInfo.innerText != ""): 
			document.getElementById('email').style.borderColor = "red";
			event.preventDefault();
		case (realnameInfo.innerText != ""):
			document.getElementById('realname').style.borderColor = "red";
			event.preventDefault();
		case (passwordInfo.innerText != ""):
			document.getElementById('password').style.borderColor = "red";
			event.preventDefault();
		case (confirmInfo.innerText != ""):
			document.getElementById('comfirmpwd').style.borderColor = "red";
			event.preventDefault();
			break;
		default: break;
	}
}

// Post Page
/**
	Post content: non-blank; dynamically showing the number of characters
					removing the "<script> tag";
*/
function checkPostContent(event) {
	var textArea = event.currentTarget;
	var userInput = textArea.value;	
	var startTag = "<script";
	var endTag = "</script>";
	userInput = userInput.replace(startTag, "").replace(endTag, "");
	textArea.value = userInput;
}


// Detail Page
/**
	Post detail page - commenting section:
	Button toggle
*/
function toggleComment(event) {
	var button = event.currentTarget;
	var commentArea = document.getElementById('user-comment');
	if(button.innerText == "Disable"){
		button.innerText = "Active";
		button.style.background = "rgba(102,191,255,0.75)";
		// get comment area
		commentArea.value = "Please login first...";
		commentArea.disabled = "disabled";
	} else {
		button.innerText = "Disable";
		button.style.background = "#66cc77";
		commentArea.value = "";
		commentArea.removeAttribute('disabled');
	}
}	


/**
	Find curse words and replace the middle letters by * 
	Here we will check this 5 words
	: shit, fuck, asshole, bitch, bastard
*/
function findReplaceCurseWords(event) {
	var commentArea = event.currentTarget;
	var curseWords = ["shit", "fuck", "asshole", "bitch", "bastard"];
	var replacedCurseWords = ["s**t", "f**k", "a*****e", "b***h", "b*****d"];
	for(i = 0; i < curseWords.length; i ++) {
		if(commentArea.value.indexOf(curseWords[i]) != -1) {
			commentArea.value = commentArea.value.replace(curseWords[i], replacedCurseWords[i]);
		}
	}
}

//dynamically counting characters 
/**
 * 
 * @param {targetId} targetId "textareaId"
 * @param {display} display ID of the number span
 * @param {total number} total total number of characters
 */
function countingCharacters(targetId, display, total) {
	var left = parseInt(total - document.getElementById(targetId).value.length);
	var displaySpan = document.getElementById(display);
	if(left < 0) {
		displaySpan.style.color = "red";
	} else {
		displaySpan.style.color = "black";
	}
	displaySpan.innerText = left;
}

// Comment box characters 
function commentBox(event) {
	// call the function countingCharacters
	countingCharacters("user-comment", "character", 250);
}

// New Blog Title characters 
function countPostTitleCharacters(event) {
	countingCharacters("titleofpost", "title-counter", 100);
}

// New Blog Content characters 
function countPostContentCharacters(event) {
	var totalCharacters = document.getElementById('postcontent').value.length + 1;
	document.getElementById('content-counter').innerText = totalCharacters;
}