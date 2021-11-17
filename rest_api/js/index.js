async function fetchReq(url, method = "GET", data = {}) {
  let objReq = {
    method: method,
    mode: "cors",
    cache: "no-cache",
    credentials: "same-origin",
    headers: {
      "Content-Type": "application/json",
    },
    redirect: "follow",
    referrerPolicy: "no-referrer",
  };
  if (method === "POST") {
    objReq = { ...objReq, body: JSON.stringify(data) };
  }
  const response = await fetch(url, objReq);
  return response.json();
}

window.addEventListener("load", async () => {
  try {
    let data = await fetchReq("api/auth.php");
    console.log(data);
  } catch (err) {
    console.error(err);
  }
});
