function convertObjToX(data) {
  //   console.log(Object.keys(data));
  let str = "";
  for (let key of Object.keys(data)) {
    str += `${key}=${data[key]}&`;
  }
  return str.substring(0, str.length - 1);
}

async function fetchReq(url, method = "GET", data = {}, token = "") {
  let objReq = {
    method: method,
    mode: "cors",
    cache: "no-cache",
    credentials: "same-origin",
    headers: {
      //   "Content-Type": "application/json",
      "Content-Type": "application/x-www-form-urlencoded",
      token: token,
    },
    redirect: "follow",
    referrerPolicy: "no-referrer",
  };
  if (method === "POST") {
    // objReq = { ...objReq, body: JSON.stringify(data) };
    objReq = { ...objReq, body: convertObjToX(data) };
  }
  const response = await fetch(url, objReq);
  return response.json();
}
