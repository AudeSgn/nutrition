var ctx = document.getElementsByClassName("barCanvas");

fetch("http://127.0.0.1/controllers/graphicController.php", {
    method: "GET"
}).then(async (res)=> {
    const result = await res.json()
    console.log(result)
    new Chart(ctx, {
        type: "bar",
        data: {
          labels: ["1", "2", "3","4", "5", "6","7", "8", "9", "10"],
          datasets: [
            {
              label: "Historique calories",
              data: result,
              backgroundColor: ["black", "black", "black", "black", "black", "black", "black", "black", "black", "black"],
              borderWidth: 1,
            },
          ],
        },
      
        options: {
          scales: {
            yAxes: [
              {
                ticks: {
                  beginAtZero: true,
                },
              },
            ],
          },
        },
      });
      
})

