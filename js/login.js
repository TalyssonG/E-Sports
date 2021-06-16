const fields = document.querySelectorAll("[required]")
function customValidation(event) {
    const field = event.target

    if (field.validity)
        field.setCustomValidity("Esse campo é obrigatório")
}

   for (field of fields) {
    field.addEventListener("invalid", customValidation)

}