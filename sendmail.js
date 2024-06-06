function sendMail(){
    let parms = {
        subject: document.getElementById("subject").value,
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
    }
    emailjs.send("service_0e17c7s", "template_o5jh788",parms).then(alert("email Sent"))
}
