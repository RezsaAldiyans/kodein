const sign_in_tombol = document.querySelector("#sign-in-tombol");
const sign_up_tombol = document.querySelector("#sign-up-tombol");
const container = document.querySelector(".con");

sign_up_tombol.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_tombol.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});
