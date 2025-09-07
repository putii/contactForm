async function postData() {
  try {
    const res = await fetch('contactFormHandler.php', {
      method: 'POST',
      body: new FormData(document.getElementById('form'))
    })
    
    const responseData = await res.json();

    if (res.ok && responseData.status === "success") {
      showMessage(responseData.message);
      form.reset();
    } else {
      showMessage(responseData.message || "Wystąpił błąd");
    }
  } catch (err) {
    console.error(err.message);
  }
}


function showMessage(message, type) {
  const existingMessage = document.querySelector("#feedback-message");
  if (existingMessage) {
    existingMessage.remove();
  }
  
  const messageDiv = document.createElement("div");
  messageDiv.textContent = message;
  messageDiv.id = "#feedback-message";
  
  const form = document.getElementById("form");
  form.parentNode.insertBefore(messageDiv, form.nextSibling);
  
  setTimeout(() => {
    messageDiv.remove();
  }, 3500)
}
