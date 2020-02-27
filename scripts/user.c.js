
// =========================================================================================================================
// web/scripts/security.js
// PT:
// EN:
// (C) 2019+
// =========================================================================================================================


// =========================================================================================================================
// EN: dependencies

// =========================================================================================================================
// EN: code begin
// =========================================================================================================================

// -------------------------------------------------------------------------------------------------------------------------
// PT: obter os dados do fomrulário e submetê-los para autenticação
// EN: retrieve the data from the form and submit them to authentication

function securelogin(p_form)
{
  // PT: esta função está definida no ficheiro security.js
  security_login(p_form.elements["username"].value, p_form.elements["password"].value, securelogin_nouser, securelogin_wrongpassword, securelogin_success);
}



// -------------------------------------------------------------------------------------------------------------------------
// PT: utilizador não encontrado
// EN: user not found

document.wrongcount = 0;

function securelogin_nouser()
{
  if(3 <= document.wrongcount) greta();
  document.getElementById("status").setAttribute("status", "nouser");
  document.getElementById("statustext").innerHTML = "Parece que não existes...";
  ++ document.wrongcount;
}

// -------------------------------------------------------------------------------------------------------------------------
// PT: password errada
// EN: wrong password

function securelogin_wrongpassword()
{
  if(3 <= document.wrongcount) greta();
  document.getElementById("status").setAttribute("status", "wrongpassword");
  document.getElementById("statustext").innerHTML = "Ooops... password errada...";
  ++ document.wrongcount;
}

// -------------------------------------------------------------------------------------------------------------------------
// PT: autenticação com sucesso
// EN: successful authentication

function securelogin_success()
{
  document.wrongcount = 0;
  document.getElementById("status").setAttribute("status", "ok");
  document.getElementById("statustext").innerHTML = "Nice...";
}


// -------------------------------------------------------------------------------------------------------------------------
// PT: autenticação com sucesso
// EN: successful authentication

function securelogout_success()
{
  // PT: alterar aqui para o que se pretende que o site faça quando o logout é feito com sucesso
  // EN: edit here to what we intend the site to do when the logout is successful
  window.location.href = "../page.php/index";
}


// -------------------------------------------------------------------------------------------------------------------------
// PT: bónus
// EN: bonus

function greta()
{
  document.getElementById("hidden").style.display = "table";
}


// -------------------------------------------------------------------------------------------------------------------------
// PT:
// EN:

function regreta()
{
  document.getElementById("hidden").style.display = "none";
}



// =========================================================================================================================
// === EOF =================================================================================================================
// =========================================================================================================================
