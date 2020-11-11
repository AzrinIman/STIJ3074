function formValidation()
{
var uname = document.registration.username;
var passid = document.registration.passid;
var uadd = document.registration.address;
var uemail = document.registration.email;
var phoneid = document.registration.phoneid;
{
if(allLetter(uname))
{
if(passid_validation(passid,7,12,))
{
if(ValidateEmail(uemail))
{ 
if(allnumeric(phoneid,))
{
if(alphanumeric(uadd))
{
{
}
} 
}
}
}
}
}
return false;
}
function allLetter(uname)
{ 
var letters = /^[A-Za-z]+$/;
if(uname.value.match(letters))
{
return true;
}
else
{
alert('Username/Name must have alphabet characters only');
uname.focus();
return false;
}
}

function alphanumeric(uadd)
{ 
var letters = /^[0-9a-zA-Z]+$/;
if(uadd.value.match(letters))
{
return true;
}
else
{
alert('User address must have alphanumeric characters only');
uadd.focus();
return false;
}
}
function ValidateEmail(uemail)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(uemail.value.match(mailformat))
{
return true;
}
else
{
alert("You have entered an invalid email address!");
uemail.focus();
return false;
}
}

function allnumeric(phoneid)
{
var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
if(phoneid.value.match(phoneno))
{
return true;
}
else
{
alert("Phone number length must be more than 10 with all numbers only");
return false;
}
}

function passid_validation(passid) 
{ 
var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
if(passid.value.match(passw)) 
{ 
return true;
}
else
{ 
alert('Password should contain small letter & capital letter & numbers / length be between 6 - 20')
return false;
}
}
