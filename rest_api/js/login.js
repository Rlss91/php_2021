async function submit(event) {
  event.preventDefault();
  try {
    let usernameinput = document.getElementById("usernameinput").value;
    let passwordinput = document.getElementById("passwordinput").value;
    console.log({
      usernameinput,
      passwordinput,
    });
    let data = await fetchReq("api/auth.php", "POST", {
      username: usernameinput,
      password: passwordinput,
    });
    if (data.msg === "OK") {
      localStorage.setItem("token", data.token);
    }
    console.log(data);
  } catch (err) {
    console.error(err);
  }
}
