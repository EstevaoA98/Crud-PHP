import './bootstrap';

document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    
    form.addEventListener("submit", function (event) {
        let isValid = true;
        let errorMessages = [];

        
        let title = document.getElementById("title").value.trim();
        let description = document.getElementById("description").value.trim();
        let location = document.getElementById("location").value.trim();

       
        if (title === "") {
            isValid = false;
            errorMessages.push("O título do evento é obrigatório.");
        }
        if (description === "") {
            isValid = false;
            errorMessages.push("A descrição do evento é obrigatória.");
        }
        if (location === "") {
            isValid = false;
            errorMessages.push("A cidade do evento é obrigatória.");
        }

        
        if (!isValid) {
            event.preventDefault();
            alert(errorMessages.join("\n"));
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const successMessage = document.getElementById("success-message");

    if (successMessage) {
        setTimeout(() => {
            successMessage.style.display = "none";
        }, 3000); 
    }
});

