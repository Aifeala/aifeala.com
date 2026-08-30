document.addEventListener('DOMContentLoaded', () => {
  const page = document.body.dataset.page;
  if (page) {
    const activeLink = document.querySelector(`.site-nav a[data-nav="${page}"]`);
    if (activeLink) {
      activeLink.classList.add('is-active');
    }
  }

  const toast = document.querySelector('.toast');
  let toastTimeout;
  const showToast = (message) => {
    if (!toast) return;
    toast.textContent = message;
    toast.hidden = false;
    clearTimeout(toastTimeout);
    toastTimeout = setTimeout(() => {
      toast.hidden = true;
    }, 2600);
  };

  document.querySelectorAll('[data-copy]').forEach((trigger) => {
    trigger.addEventListener('click', async () => {
      const value = trigger.dataset.copy;
      if (!value) return;
      try {
        await navigator.clipboard.writeText(value);
        showToast(`Copied ${value}`);
      } catch (error) {
        showToast(`Copy failed. Use ${value}`);
      }
    });
  });
});
