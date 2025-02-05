import './bootstrap';
//Criar evento
document.addEventListener("DOMContentLoaded", function () {
    const successMessage  = document.getElementById("success-message");

    if (successMessage) {
        setTimeout(() => {
            successMessage.style.display = "none";
        }, 3000); 
    }
});

//Deletar evento
document.addEventListener("DOMContentLoaded", function () {
    const deleteButtons = document.querySelectorAll(".delete-button");

    deleteButtons.forEach(button => {
        button.addEventListener("click", function (event) {
            if (!confirm("Tem certeza que deseja deletar este evento?")) {
                event.preventDefault();
            }
        });
    });
});
document.addEventListener("DOMContentLoaded", function () {
    const deleteMessage = document.getElementById("delete-message");

    if (deleteMessage) {
        setTimeout(() => {
            deleteMessage.style.display = "none";
        }, 3000); 
    }
});
