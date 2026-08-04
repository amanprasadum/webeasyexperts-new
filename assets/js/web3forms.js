/* ==========================================================================
   Web3Forms — common submit handler for every form on the site.
   Any <form class="w3-form"> automatically gets AJAX submission wired up.
   Optional: add data-success-id="someId" on the form to reveal a dedicated
   success panel instead of the default toast + reset().
   ========================================================================== */
(function () {
  function ready(fn) {
    if (document.readyState !== "loading") fn();
    else document.addEventListener("DOMContentLoaded", fn);
  }

  function notify(message, type) {
    if (typeof Toastify === "function") {
      Toastify({
        text: message,
        duration: 4500,
        gravity: "top",
        position: "right",
        close: true,
        stopOnFocus: true,
        style: {
          background: type === "error"
            ? "linear-gradient(to right, #E53935, #B71C1C)"
            : "linear-gradient(to right, #16A34A, #15803D)",
          borderRadius: "10px",
          fontFamily: "inherit",
          fontSize: "0.9rem",
          boxShadow: "0 10px 30px rgba(0,0,0,0.15)"
        }
      }).showToast();
    } else {
      alert(message);
    }
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
              notify("Success! Your message has been sent.", "success");
              form.reset();
            }
          } else {
            notify("Error: " + (data.message || "Something went wrong. Please try again."), "error");
          }
        } catch (err) {
          notify("Something went wrong. Please try again.", "error");
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
