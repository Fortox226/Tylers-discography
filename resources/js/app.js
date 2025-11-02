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
            fetch(`/admin/update-role/${row.dataset.id}`, {
                method: "PATCH",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({ role: roleSelect.value })
            })
            .then(res => res.json())
            .then(() => {
                userRow.querySelector('.user-role-display').textContent = roleSelect.value;
            })
            .catch(() => alert("Zaktualizowano"));
        });
    })
})
closeButton.addEventListener('click', () => {
    dialog.close();
})