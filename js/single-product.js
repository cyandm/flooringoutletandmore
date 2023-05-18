if (document.querySelector('.single-product')) {
  const tabs = document.querySelector('.tabs');

  const headings = tabs.querySelectorAll('.headings span');
  const contents = tabs.querySelectorAll('.content div');

  headings.forEach((headingEl) => {
    headingEl.addEventListener('click', () => {
      /* Add Show Class to click headings  */
      headings.forEach((elem) => {
        elem.classList.toggle('show', elem === headingEl);
      });

      /* Add Show Class to related content */
      contents.forEach((contentEl) => {
        const shouldShow = headingEl.dataset.tab === contentEl.dataset.tab;
        contentEl.classList.toggle('show', shouldShow);
      });

      const contentEl = tabs.querySelector('.content');
      contentEl.style.borderTopLeftRadius =
        headingEl.dataset.tab !== 'description' ? '14px' : '0';
    });
  });
}
