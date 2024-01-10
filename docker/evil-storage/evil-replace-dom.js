const hackDomReplaceElement = (targetEl,myEl) =>{targetEl.replaceWith(myEl)}
const createAlertBox = (msg,title = null)=>{
    let alert = document.createElement("div")
    alert.setAttribute("class","alert alert-danger mt-2");
    alert.setAttribute("id","hack-alert");
    alert.setAttribute("name","hack-alert");
    alert.setAttribute("role","alert");

    let textEl = document.createElement("p");
    textEl.textContent = msg;

    if(title){
        let titleEl = document.createElement("h4");
        titleEl.setAttribute("class","alert-heading");
        titleEl.textContent = title;
        alert.appendChild(titleEl);
    }

    alert.appendChild(textEl);

    return alert;
}
const form = document.getElementById("commentForm");
hackDomReplaceElement(form.parentElement,createAlertBox("Ceci est un message de HackerMan !", "Hacked"))
