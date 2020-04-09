import formAddProfesor from './formAddProfesor.js';
import formSearchProfessor from "./formSearchProfessor.js";
import formAddSubject from "./formAddSubject.js";

function actionDispatcher(action, event){
  if(action === 'add') {
    formAddProfesor(event);
  } else if (action === 'search'){
    formSearchProfessor(event);
  }
}

function actionSubjectDispatcher(action, event){
  if(action === 'add') {
    formAddSubject(event);
  } else if (action === 'search'){
    formSearchProfessor(event);
  }
}
document.addEventListener("DOMContentLoaded", () => {
  const menuTeachers = document.getElementById("menu-teachers");
  const menuSubjects = document.getElementById("menu-subjects");
  const teacherOptions = menuTeachers.getElementsByTagName("a");
  const subjectsOptions = menuSubjects.getElementsByTagName("a");

  const divContent = document.getElementById("content");

  for (let item of teacherOptions) {
    item.addEventListener("click", e => {
      e.preventDefault();
      const action = e.target.dataset.action;

      fetch(`html_chunks/form_${action}_teacher.html`)
        .then(function(response) {
          return response.text();
        })
        .then(function(html) {
          divContent.innerHTML = html;
          const form = divContent.getElementsByTagName('form');
          for (let item of form) {
            item.addEventListener('submit', event => {
              event.preventDefault();
              actionDispatcher(action, event);
            })
          }
        })
        .catch(function(err) {
          console.warn("Something went wrong.", err);
        });
    });
  }

  for (let item of subjectsOptions) {
    item.addEventListener("click", e => {
      e.preventDefault();
      const action = e.target.dataset.action;

      fetch(`html_chunks/form_${action}_subject.html`)
        .then(function(response) {
          return response.text();
        })
        .then(function(html) {
          divContent.innerHTML = html;
          const form = divContent.getElementsByTagName('form');
          for (let item of form) {
            item.addEventListener('submit', event => {
              event.preventDefault();
              actionSubjectDispatcher(action, event);
            })
          }
        })
        .catch(function(err) {
          console.warn("Something went wrong.", err);
        });
    });
  }
});
