function showLastIP(accountId) {
  var url = "index.php?entryPoint=showLastIP&id=" + accountId;
  $.ajax({
    url: url,
    success: function (response) {
      var data = JSON.parse(response);
      alert("Last IP: " + data.saved_from_ip_c);
    },
    error: function () {
      alert("Error fetching IP address");
    },
  });
}
