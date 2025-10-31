import './bootstrap';

const dialog = document.querySelector("dialog");
const showButton = document.getElementById('openModal');
const closeButton = document.getElementById('closeModal');

function generateOptions(selected, options) {
    const select = document.createElement("select");
    select.append(

        ...options.map(opt => {
            const elem = document.createElement("option");
            if (selected === opt) elem.setAttribute("selected", "");
            elem.textContent = elem.value = opt;
            return elem;
        }));

    return select;

}

document.querySelectorAll(".user-row").forEach(userRow => {
    userRow.querySelector(".info-btn").addEventListener("click", (ev) => {
        const row = ev.currentTarget.closest(".user-row");
        const roleSelect = generateOptions(row.dataset.role, ["admin", 'user']);

        dialog.showModal();
        dialog.querySelector('.user-name').textContent = row.dataset.login;
        dialog.querySelector('.user-email').textContent = row.dataset.email;
        dialog.querySelector('.user-role').replaceChildren(roleSelect)

        roleSelect.addEventListener("change", () => {
            fetch(
                ""
            ).then((res) => {
                if (!res.ok)
                    throw new Error();
            }).catch(() => {

            })
        })
    })
})
closeButton.addEventListener('click', () => {
    dialog.close();
})