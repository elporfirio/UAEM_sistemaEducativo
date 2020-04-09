export default function formSearchSubject(event) {
  const formData = new FormData(event.target);

  const queryString = new URLSearchParams(formData).toString();
  const url = "app/searchSubject.php?" + queryString;
  fetch(url, {
    method: "GET" // or 'PUT'
  })
    .then(res => res.json())
    .catch(error => {
      divMessage.innerHTML =
        "<p class='error-text'>No se econtraron unidades de aprendizaje</p>";
    })
    .then(response => {
      console.log(response);
      if (response.success) {
        printSubjectList(response.result);
      }
    });
}

function printSubjectList(professorData) {
  const divMessage = document.getElementById("result-message");

  const html = professorData.reduce((last, current, index) => {
    const temp = `
        <div class="subject-card">
            <div class="data">
                <div>Código: <span>${current.code}</span></div>
                <div>Materia: <span>${current.name}</span></div>
                <div>créditos: <span>${current.credits}</span></div>
                <div>Plan de Estudio: <span>${current['study_plan']}</span></div>
            </div>
            <div class="controls">
                <div style="flex: 1">
                    <button>editar</button>
                    <button>eliminar</button>
                </div>
                <div style="flex: 1"></div>
            </div>
        </div>
        `;
    return (last += temp);
  }, "");

  divMessage.innerHTML = html;
}
