async function postData() {
  try {
    const res = await fetch('contactFormHandler.php', {
      method: 'POST',
      body: new FormData(document.getElementById('form'))
    })
    if (!res.ok) throw new Error('Response not ok.');
  } catch (err) {
    console.log(err)
  }
}
