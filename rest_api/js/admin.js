window.addEventListener("load", async () => {
  try {
    let data = await fetchReq(
      "api/util/authMiddleWare.php",
      "GET",
      {},
      localStorage.getItem("token")
    );
    if (!data) console.log(data);
  } catch (err) {}
});
