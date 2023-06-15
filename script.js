let input = document.querySelectorAll(".input-texto")


/* O valor do atributo value não é atualizado automaticamente, por isso tenho que forçar ele pegar o novo valor para a conferência no CSS ser correta */
input.forEach(item => {
    item.addEventListener("change", () => {
        item.setAttribute("value", item.value)
    })
})