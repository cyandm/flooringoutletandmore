let hasSingleProduct = Boolean(document.querySelector('.single-product'));

if (hasSingleProduct) {
  /* Tabs */
  const tabs = document.querySelector('.tabs');
  const headings = tabs.querySelectorAll('.headings span');
  const contents = tabs.querySelectorAll('.content div');

  headings.forEach((headingEl) => {
    headingEl.addEventListener('click', () => {
      headings.forEach((elem) => {
        elem.classList.toggle('show', elem === headingEl);
      });

      contents.forEach((contentEl) => {
        const shouldShow = headingEl.dataset.tab === contentEl.dataset.tab;
        contentEl.classList.toggle('show', shouldShow);
      });

      const contentEl = tabs.querySelector('.content');
      contentEl.style.borderTopLeftRadius =
        headingEl.dataset.tab !== 'description' ? '14px' : '0';
    });
  });

  /* Images 
  const openModal = document.querySelector('#openModal');
  const closeModal = document.querySelector('#closeModal');
  const Modal = document.querySelector('#imagesModal');

  openModal.addEventListener('click', () => {
    Modal.classList.add('show');
  });
  closeModal.addEventListener('click', () => {
    Modal.classList.remove('show');
  });
  */
}
