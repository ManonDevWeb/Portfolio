const buttons = document.querySelectorAll(".btn");
const result = document.getElementById("result");

buttons.forEach((button) => {
  button.addEventListener("click", (e) => {
    result.textContent += e.target.id;        // textContent écrit dans la balise
  });
});

equal.addEventListener("click", () => {
  result.textContent = eval(result.textContent);     //methode eval permet de calculer ce qu'il y a à l'intérieur 
});

clear.addEventListener("click", () => {
  result.textContent = "";
});