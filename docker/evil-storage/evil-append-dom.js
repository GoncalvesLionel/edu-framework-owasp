console.log("Evil Append to Dom Started");
const hackDomAppendElement = (rootEl,myEl) =>{rootEl.appendChild(myEl)}
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
hackDomAppendElement(form.parentElement,createAlertBox("Hello From HackerMan !","Hacked"))

console.log("Evil Append to Dom ended successfully");
