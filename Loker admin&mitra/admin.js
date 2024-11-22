
    document.addEventListener("DOMContentLoaded", function () {

    const approveButtons = document.querySelectorAll(".btn-success");
    const rejectButtons = document.querySelectorAll(".btn-danger");


    approveButtons.forEach((button) => {
      button.addEventListener("click", function () {
        const row = button.closest("tr"); 
        const statusCell = row.querySelector("td:nth-child(4)"); 


        statusCell.textContent = "Disetujui";


        button.textContent = "Disetujui";
        button.classList.remove("btn-success");
        button.classList.add("btn-secondary");
        button.disabled = true;


        const rejectButton = row.querySelector(".btn-danger");
        if (rejectButton) {
          rejectButton.remove();
        }
      });
    });

    rejectButtons.forEach((button) => {
      button.addEventListener("click", function () {
        const row = button.closest("tr"); 
        const statusCell = row.querySelector("td:nth-child(4)"); 


        statusCell.textContent = "Ditolak";

   
        button.textContent = "Ditolak";
        button.classList.remove("btn-danger");
        button.classList.add("btn-secondary");
        button.disabled = true;

    
        const approveButton = row.querySelector(".btn-success");
        if (approveButton) {
          approveButton.remove();
        }
      });
    });
  });

