const form = document.getElementById("form");
const nameInput = document.getElementById("name");
const emailInput = document.getElementById("email");
const foneInput = document.getElementById("fone");
const subjectSelect = document.getElementById("subject");
const messageTextarea = document.getElementById("message");

form.addEventListener("submit", (e) => {
  e.preventDefault();

  validateInputs();

  // envia o forms caso todos os campos estejam preenchidos
  if (document.querySelectorAll(".success").length === 5) {
    form.submit();
  }
});

const setError = (element, message) => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector(".error");

  errorDisplay.innerText = message;
  inputControl.classList.add("error");
  inputControl.classList.remove("success");
};

const setSucess = (element) => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector(".error");

  errorDisplay.innerText = "";
  inputControl.classList.add("success");
  inputControl.classList.remove("error");
};

const validateInputs = () => {
  const nameInputValue = nameInput.value.trim();
  const emailInputValue = emailInput.value.trim();
  const foneInputValue = foneInput.value.trim();
  const subjectSelectValue = subjectSelect.value.trim();
  const messageTextareaValue = messageTextarea.value.trim();

  //verifica se o nome está preenchido
  if (nameInputValue === "") {
    setError(nameInput, "Campo Obrigatório");
  } else {
    setSucess(nameInput);
  }

  // verifica se o email está preenchido e se é válido
  if (emailInputValue === "") {
    setError(emailInput, "Campo Obrigatório");
  } else if (!isValidEmail(emailInputValue)) {
    setError(emailInput, "E-mail inválido");
  } else {
    setSucess(emailInput);
  }

  // verifica se o numero de tefeone está preenchido
  if (foneInputValue === "") {
    setError(foneInput, "Campo Obrigatório");
  } else {
    setSucess(foneInput);
  }

  // verifica se a situaçao foi selcionada
  if (subjectSelectValue === "") {
    setError(subjectSelect, "Campo Obrigatório");
  } else {
    setSucess(subjectSelect);
  }

  // verifica se a mensagem está preenchida
  if (messageTextareaValue === "") {
    setError(messageTextarea, "Campo Obrigatório");
  } else {
    setSucess(messageTextarea);
  }
};

//função que valida email
const isValidEmail = (email) => {
  const re =
    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
};
