import formDataToJSON from "./formDataToJSON.js";

export default function editProfessorForm(event, id) {
  const formData = new FormData(event.target);
  const divMessage = document.getElementById('result-message');

  const url = "app/updateProfessor.php?id=" + id;
  const data = formDataToJSON(formData);

  // TODO: Mover strings a archivo de traduccion
  fetch(url, {
    method: "PUT", // or 'PUT'
    body: JSON.stringify(data), // data can be `string` or {object}!
    headers: {
      "Content-Type": "application/json"
    }
  })
    .then(res => res.json())
    .catch(error => {
      divMessage.innerHTML =
        "<p class='error-text'>No se pudo crear el profesor</p>";
    })
    .then(response => {
      console.log(response);
      if(response.success) {

      }
    });
}
