import formAddProfesor from './formAddProfesor.js';

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
              formAddProfesor(event);
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
        })
        .catch(function(err) {
          console.warn("Something went wrong.", err);
        });
    });
  }
});
