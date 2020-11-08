var nom = document.getElementById('nom');
var prenom = document.getElementById('prenom');
var nom_error = document.getElementById('nom_error');
var prenom_error = document.getElementById('prenom_error');
var model = /^[a-zA-Z]+$/;
var modelEmail =  /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

function testNom()
{
    if(!(model.test(nom.value)))
	{
		nom.style.border = "1px solid red";
		nom_error.style.display ="block";
		return false;
	}
    else
    {
		nom.style.border = "1px solid green";
		nom_error.style.display ="none";
		return true;
	}

}

function testPrenom()
{
    if(!(model.test(prenom.value)))
	{
		prenom.style.border = "1px solid red";
		prenom_error.style.display ="block";
		return false;
	}
    else
    {
		prenom.style.border = "1px solid green";
		prenom_error.style.display ="none";
		return true;
	}

}

function testEmail()
{
    if(!(modelEmail.test(email.value)))
	{
		email.style.border = "1px solid red";
		email_error.style.display ="block";
		return false;
	}
    else
    {
		email.style.border = "1px solid green";
		email_error.style.display ="none";
		return true;
	}

}

function testRadio()
{
	var radios = document.getElementsByName('radio');
	var count = 0 ;

	for (var i = 0, length = radios.length; i < length; i++) {
	  if (radios[i].checked) {
	    // do whatever you want with the checked radio
	    count++;
	  }
	}
	if(count>0)
	  return true;
	else{
		alert("vous choisir entre Homme ou Femme");
		return false;
	    }
}


function testChechbox()
{
	var radios = document.getElementsByName('domaine[]');
	var count = 0 ;

	for (var i = 0, length = radios.length; i < length; i++) {
	  if (radios[i].checked) {
	    // do whatever you want with the checked radio
	    count++;
	  }
	}
	if(count>0)
	  return true;
	else{
		alert("vous devez bien preciser votre domaine");
		return false;
	    }
}

	

function validated()
{
	if(testNom()&&testPrenom()&&testEmail()&&testRadio()&&testChechbox())
		return true;
		else
		return false;
	
}	  
