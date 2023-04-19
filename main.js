// Form submit event - defines the path and serialize to json
$("#question-form").submit(function (event) {
  event.preventDefault();
  $.ajax({
    url: "ai.php",
    method: "POST",
    data: $(this).serialize(),
    success: function () {
      window.location.reload();
    },
    error: function (error) {
      console.log("Error: " + error);
    },
  });
});

// Enter will submit - shift+enter break line - spinner shown while loading
$("#question-form textarea").keydown(function (event) {
  if (event.key === "Enter" && !event.shiftKey) {
    event.preventDefault();
    
    $("#question-form").submit();

    var spinner = '<div class="spinner-border text-dark text-center" role="status"><span class="visually-hidden">Loading...</span></div>';
    $("#question-form textarea").replaceWith(spinner);
  }
});

// if conversation is shown, function will erase this
function clearSession() {
  fetch("clear_session.php", {
    method: "POST",
  })
    .then((response) => {
      if (response.ok) {
        window.location.reload();
      } else {
        alert("An error occurred while clearing the session.");
      }
    })
    .catch((error) => {
      console.error(error);
    });
}