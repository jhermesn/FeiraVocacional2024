const form = document.querySelector("#form");
const nameInput = document.querySelector("#name");
const emailInput = document.querySelector("#email");
const foneInput = document.querySelector("#fone");
const subjectSelect = document.querySelector("#subject");
const messageTextarea = document.querySelector("#message");

form.addEventListener("submit", (event) => {
  event.preventDefault();

  // verifica se o nome está vazio
  if (nameInput.value === "") {
    alert("Por favor, preencha o seu nome.");
    return;
  }

  // verifica se o email está preenchido e se é válido
  if (emailInput.value === "" || !isEmailValid(emailInput.value)) {
    alert("Por favor, preencha o seu email.");
    return;
  }

  // verifica s o numro de tefeone está preenchido
  if (foneInput.value === "") {
    alert("Por favor, informe o número de telefone para contato.");
    return;
  }

  // verifica se a situaçao foi selcionada
  if (subjectSelect.value === "") {
    alert("Por favor, selecione o assunto.");
    return;
  }

  // verifica se a mensagem está preenchida
  if (messageTextarea.value === "") {
    alert("Por favor, disserte.");
    return;
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
