// Register username Event Handler.
var username = document.getElementById('username');
if (username != null){
	username.addEventListener('change', checkUserName, false);
}

// Register password Event handler
var password = document.getElementById('password');
if(password != null){
	password.addEventListener('change', checkPwd, false);
}

// Login Page - Register to Login button 
var loginForm = document.getElementById('loginForm');
if(loginForm) {
	loginForm.addEventListener('submit', checkLoginForm, false);
}

/**
 *  SignUp page 
 * 
 * 
 */
// Check email 
var email = document.getElementById('email');
if(email){
	email.addEventListener('change', checkEmail, false);
}

// Check real name
var realname = document.getElementById('realname');
if(realname) {
	realname.addEventListener('change', checkRealName, false);
}

// Confirm password
var comfirmpwd = document.getElementById('comfirmpwd');
if(comfirmpwd) {
	comfirmpwd.addEventListener('change', confirmPassword, false); 
}

// Check signup form 
var signUpForm = document.getElementById('signupForm');
if(signUpForm) {
	signUpForm.addEventListener('submit', checkSignUpForm, false);
}

// Post page 
var postcontent = document.getElementById('postcontent');
if(postcontent != null) {
	postcontent.addEventListener('change', checkPostContent, false);
	postcontent.addEventListener('keydown', countPostContentCharacters, false);
}

// Post page Title 
var postTitle = document.getElementById('titleofpost');
if(postTitle) {
	postTitle.addEventListener('keyup', countPostTitleCharacters, false);
}

// Detail Page
// button 
var toggleBtn = document.getElementById('toggleBtn');
if(toggleBtn != null) {
	toggleBtn.addEventListener('click', toggleComment, false);
}

// Find and replace curse words
var commentarea = document.getElementById('user-comment');
if(commentarea != null) {
	commentarea.addEventListener('change', findReplaceCurseWords, false);
	commentarea.addEventListener('keyup', commentBox, false);
}
