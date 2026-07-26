/* ==========================================================================
   Web3Forms — common submit handler for every form on the site.
   Any <form class="w3-form"> automatically gets AJAX submission wired up.
   Optional: add data-success-id="someId" on the form to reveal a dedicated
   success panel instead of the default alert() + reset().
   ========================================================================== */
(function () {
  function ready(fn) {
    if (document.readyState !== "loading") fn();
    else document.addEventListener("DOMContentLoaded", fn);
  }

  ready(function () {
    var forms = document.querySelectorAll("form.w3-form");

    forms.forEach(function (form) {
      form.addEventListener("submit", async function (e) {
        e.preventDefault();

        var submitBtn = form.querySelector('button[type="submit"]');
        var originalHtml = submitBtn ? submitBtn.innerHTML : "";
        if (submitBtn) {
          submitBtn.disabled = true;
          submitBtn.innerHTML = "Sending...";
        }

        var formData = new FormData(form);

        try {
          var response = await fetch("https://api.web3forms.com/submit", {
            method: "POST",
            headers: { Accept: "application/json" },
            body: formData
          });
          var data = await response.json();

          if (response.ok && data.success) {
            var successId = form.getAttribute("data-success-id");
            if (successId) {
              var successEl = document.getElementById(successId);
              form.style.display = "none";
              if (successEl) successEl.style.display = "block";
            } else {
              alert("Success! Your message has been sent.");
              form.reset();
            }
          } else {
            alert("Error: " + (data.message || "Something went wrong. Please try again."));
          }
        } catch (err) {
          alert("Something went wrong. Please try again.");
        } finally {
          if (submitBtn) {
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalHtml;
          }
        }
      });
    });
  });
})();
