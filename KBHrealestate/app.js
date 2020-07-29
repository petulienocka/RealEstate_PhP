async function addAgent() {
    let sData = await fetch('api-create-agent.php', {
        method: "POST",
        body: new FormData (document.getElementById('signupagent'))
    });
    jData = await sData.json();
    console.log(jData);
}