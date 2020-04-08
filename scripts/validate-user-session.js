if (document.readyState === "loading") {
  // loading yet, wait for the event
  const url = "app/hasSession.php";

  fetch(url, {
    method: "GET" // or 'PUT'
  })
    .then(res => res.json())
    .catch(() => {
      window.location.replace("index.html");
    });
}
