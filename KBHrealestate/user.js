async function addUser() {
    let sData = await fetch('api-create-user.php', {
        method: "POST",
        body: new FormData (document.getElementById('signupuser'))
    });
    jData = await sData.json();
    console.log(jData);
}