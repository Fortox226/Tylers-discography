import './bootstrap';

const dialog = document.querySelector("dialog");
const showButton = document.getElementById('openModal');
const closeButton = document.getElementById('closeModal');

showButton.addEventListener('click', (ev) => {
    dialog.showModal();
    const row = ev.currentTarget.closest(".user-row");
    row.dataset.id;
})

closeButton.addEventListener('click', () => {
    dialog.close();
})