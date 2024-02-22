const btn_edit = document.getElementById("edit_admin");
const dropdownMenu = document.getElementById("dropdown");
const formDelete = document.getElementById("delete_container");

btn_edit.addEventListener("click", () => {
    if (dropdownMenu.classList.contains("hidden")) {
        dropdownMenu.classList.remove("hidden");
    } else {
        dropdownMenu.classList.add("hidden");
    }
});

function closeForm() {
    formDelete.classList.add("opacity-0", "invisible");
}
function showForm() {
    formDelete.classList.remove("opacity-0", "invisible");
}

document.querySelectorAll("a.confirmation-link").forEach((link) => {
    link.addEventListener("click", confirmation);
});

function confirmation(e) {
    e.preventDefault();
    let url = e.currentTarget.getAttribute("href");
    swal({
        title: "Are you sure to this !",
        text: "you won't be able to revert this delete!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willCancel) => {
        if (willCancel) {
            window.location.href = url;
        }
    });
}
