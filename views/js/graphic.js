var ctx = document.getElementById("barCanvas").getContext("2d");
new Chart(ctx, {
  type: "bar",
  data: {
    labels: ["Red", "Blue", "Yellow"],
    datasets: [
      {
        label: "# of Votes",
        data: [12, 19, 3, 5, 2, 3],
        backgroundColor: ["rgba(255, 99, 132, 0.2)"],
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
