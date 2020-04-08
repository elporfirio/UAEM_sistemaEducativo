document.addEventListener("DOMContentLoaded", () => {
  let form = document.getElementById("form-access");
  let divMessage = document.getElementById("access-status");
  form.addEventListener("submit", event => {
    event.preventDefault();
    let { value } = event.target.password;

    console.log(value);
    const url = "verificar_acceso.php";
    const data = { password: value };

    // TODO: Mover strings a archivo de traduccion
    fetch(url, {
      method: "POST", // or 'PUT'
      body: JSON.stringify(data), // data can be `string` or {object}!
      headers: {
        "Content-Type": "application/json"
      }
    })
      .then(res => res.json())
      .catch(error => {
        divMessage.innerHTML = "<p class='error-text'>Datos de Acceso incorrectos</p>";
      })
      .then(response => {
        if (response.success) {
          window.location.replace("bienvenida.html");
        } else {
          divMessage.innerHTML = "<p class='error-text'>Datos de Acceso incorrectos</p>";
        }
      });
  });
});
