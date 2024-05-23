const form = document.querySelector("#form");
const nameInput = document.querySelector("#name");
const emailInput = document.querySelector("#email");
const foneInput = document.querySelector("#fone");
const subjectSelect = document.querySelector("#subject");
const messageTextarea = document.querySelector("#message");

form.addEventListener("submit", (event) => {
  event.preventDefault();

  // verifica se o nome está vazio
  if (nameInput.value === "" || nameInput.value === " ") {
    nameInput.placeholder = "Campo Obrigatório";
    nameInput.style.border = "1px solid #cc0000";
    return;
  } else {
    nameInput.placeholder = " ";
    nameInput.style.border = "1px solid #dee2e6";
  }

  // verifica se o email está preenchido e se é válido
  if (emailInput.value === "" || !isEmailValid(emailInput.value)) {
    emailInput.placeholder = "Campo Obrigatório";
    emailInput.style.border = "1px solid #cc0000";
    return;
  } else {
    emailInput.placeholder = " ";
    emailInput.style.border = "1px solid #dee2e6";
  }

  // verifica s o numro de tefeone está preenchido
  if (foneInput.value === "" || foneInput.value === " ") {
    foneInput.placeholder = "Campo Obrigatório";
    foneInput.style.border = "1px solid #cc0000";
    return;
  } else {
    foneInput.placeholder = " ";
    foneInput.style.border = "1px solid #dee2e6";
  }

  // verifica se a situaçao foi selcionada
  if (subjectSelect.value === "") {
    subjectSelect.style.border = "1px solid #cc0000";
    return;
  } else {
    subjectSelect.style.border = "1px solid #dee2e6";
  }

  // verifica se a mensagem está preenchida
  if (messageTextarea.value === "" || messageTextarea.value === " ") {
    messageTextarea.placeholder = "Campo Obrigatório";
    messageTextarea.style.border = "1px solid #cc0000";
    return;
  } else {
    messageTextarea.placeholder = " ";
    messageTextarea.style.border = "1px solid #dee2e6";
  }

  // envia o forms caso todos os campos estejam preenchidos
  form.submit();
});

//função que valida email
function isEmailValid(email) {
  //cria uma regex para validar email
  const emailRegex = new RegExp(
    // usuario23@host.com.br
    /^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,}$/
  );

  if (emailRegex.test(email)) {
    return true;
  }
  return false;
}
