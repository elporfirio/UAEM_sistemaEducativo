import formDataToJSON from "./formDataToJSON.js";

export default function formSearchProfessor(event) {
  const formData = new FormData(event.target);

  const queryString = new URLSearchParams(formData).toString();
  const url = "app/searchProfessor.php?" + queryString;
  fetch(url, {
    method: "GET" // or 'PUT'
  })
    .then(res => res.json())
    .catch(error => {
      divMessage.innerHTML =
        "<p class='error-text'>No se econtraron profesores</p>";
    })
    .then(response => {
      console.log(response);
      if (response.success) {
        printProfessorList(response.result);
      }
    });
}

function printProfessorList(professorData) {
  const divMessage = document.getElementById("result-message");

  const html = professorData.reduce((last, current, index) => {
    const temp = `
        <div class="professor-card">
            <div class="photo">
                <img src="http://placebeard.it/g/150/150" alt="professor_${current.name}">
            </div>
            <div class="data-container">
                <div class="data">
                    <div>Nombre: <span>${current.name} ${current.secondName}</span></div>
                    <div>Profesión: <span>${current.profession}</span></div>
                    <div>email: <span>${current.email}</span></div>
                </div>
                <div class="controls">
                    <div style="flex: 1">
                        <button>editar</button>
                        <button>eliminar</button>
                    </div>
                    <div style="flex: 1"></div>
                </div>
            </div>
        </div>
        `;
    return (last += temp);
  }, "");

  divMessage.innerHTML = html;
}
