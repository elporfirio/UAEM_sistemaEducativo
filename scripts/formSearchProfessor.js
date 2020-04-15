import editProfessorForm from "./formEditProfesor.js";

export default function formSearchProfessor(event) {
  const formData = new FormData(event.target);
  const divMessage = document.getElementById("result-message");

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

function printProfessorEditForm(professorData) {
  console.log('PROFESOR DATA',professorData);
  const divContent = document.getElementById("content");

  fetch(`html_chunks/form_edit_teacher.html`)
    .then(function(response) {
      return response.text();
    })
    .then(function(html) {
      divContent.innerHTML = html;
      const form = divContent.getElementsByTagName("form");
      const inputs = form[0].elements;

      for (let item of inputs) {
        if(item.name !== ""){
          console.log(professorData[0][item.name]);
          item.value = professorData[0][item.name];
        }
      }

      for (let item of form) {
        item.addEventListener("submit", event => {
          event.preventDefault();
          // TODO
          console.log('GUARDAR EDICION');
          editProfessorForm(event, professorData[0].idprofessor);
        });
      }
    })
    .catch(function(err) {
      console.warn("Something went wrong.", err);
    });
}

function printProfessorList(professorData) {
  const divMessage = document.getElementById("result-message");

  const html = professorData.reduce((last, current, index) => {
    const temp = `
        <div class="professor-card" id="professor-card-${current.idprofessor}">
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
                        <button data-action="edit" data-professorId="${current.idprofessor}" >editar</button>
                        <button data-action="delete" data-professorId="${current.idprofessor}" data-professorName="${current.name} ${current.secondName}">eliminar</button>
                    </div>
                    <div style="flex: 1"></div>
                </div>
            </div>
        </div>
        `;
    return (last += temp);
  }, "");

  divMessage.innerHTML = html;
  assignEditActions(divMessage);
}

function assignEditActions(domElement) {
  const buttons = domElement.getElementsByTagName("button");

  for (let btn of buttons) {
    btn.addEventListener("click", event => {
      if (event.target.dataset.action === "delete") {
        confirmDelete(event);
      } else if (event.target.dataset.action === "edit") {
        editProfessor(event);
      }
    });
  }
}

function editProfessor(event) {
  event.stopPropagation();
  event.preventDefault();

  const divMessage = document.getElementById("result-message");
  const id = event.target.dataset.professorid;
  const url = "app/getProfessor.php?id=" + id;

  fetch(url, {
    method: "GET" // or 'PUT'
  })
    .then(res => res.json())
    .catch(error => {
      divMessage.innerHTML = "<p class='error-text'>No se econtró profesor</p>";
    })
    .then(response => {
      console.log(response);
      // if (response.success) {
      //   printProfessorList(response.result);
      // }
      printProfessorEditForm(response.result);
    });
}

function confirmDelete(event) {
  event.stopPropagation();
  event.preventDefault();

  const { professorid, professorname } = event.target.dataset;

  if (confirm(`¿desea eliminar a ${professorname}?`)) {
    console.log("ELIMINAR a", professorid);
    deleteProfessorById(professorid);
  }
}

function deleteProfessorById(id) {
  const divMessage = document.getElementById("result-message");
  const url = "app/deleteProfessor.php?id=" + id;

  fetch(url, {
    method: "DELETE" // or 'PUT'
  })
    .then(res => res.json())
    .catch(error => {
      divMessage.innerHTML =
        "<p class='error-text'>No se econtraron profesores</p>";
    })
    .then(response => {
      console.log(response);
      // TODO: Refrescar la lista
      const card = document.getElementById(`professor-card-${id}`);
      card.parentNode.removeChild(card);
    });
}
