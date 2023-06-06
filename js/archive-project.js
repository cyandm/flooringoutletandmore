const projects = document.querySelectorAll('article.project');

for (const project of projects) {
  project.addEventListener('click', () => {
    console.log(project.id);
  });
}
