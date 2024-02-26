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
// ============ Active link In side bar ==========
const links = document.querySelectorAll('.sidebar-link');

links.forEach((link) => {
    link.addEventListener('click' , () => {
        links.forEach(el => {
            el.classList.remove('active')
        })
    })
    if (link.href === window.location.href) {
        link.classList.add('active');
    }

})

// ====== Notification ======

const btnNotification = document.getElementById('btn_notification');
const wrapper_notify = document.getElementById('wrapper_notify');

btnNotification.addEventListener('click' , () => {
    if (!btnNotification.classList.contains('active')) {
        btnNotification.classList.add('active')
        wrapper_notify.classList.remove('opacity-0', 'invisible' , 'translate-y-[40px]')
    }else {
        btnNotification.classList.remove('active')
        wrapper_notify.classList.add('opacity-0', 'invisible' , 'translate-y-[40px]')
    }

})

// =========== Hidden Notification container when outside wrapper ====== !
window.addEventListener('click' , (e) => {
    if (!wrapper_notify.contains(e.target) && !btnNotification.contains(e.target)){
        btnNotification.classList.remove('active')
        wrapper_notify.classList.add('opacity-0', 'invisible' , 'translate-y-[40px]')
    }
})
