<script>
import { Line } from "vue-chartjs";

export default {
  extends: Line,
  data() {
    return {
      gradient: null,
      gradient2: null
    };
  },
  mounted() {

    this.renderChart(
      {
        labels: [
          "January",
          "February",
          "March",
          "April",
          "May",
          "June",
          "July"
        ],
        datasets: [
          {
            label: "Data One",
            borderColor: "#3490dc",
            borderWidth: 3,
            data: [4000, 3900, 1000, 4000, 3900, 8000, 5000],
            fill: '',
          },
          {
            label: "Data Two",
            borderColor: "#ffed4a",
            borderWidth: 3,
            data: [6000, 5500, 3200, 1000, 2000, 1200, 5300],
            fill: ''
          }
        ],
        options: {
        scales: {
            yAxes: [{
                ticks: {
                    // Include a dollar sign in the ticks
                    callback: function(value, index, values) {
                        return  value + '$';
                    }
                }
            }]
        }
        }
      },
      
      { responsive: true, maintainAspectRatio: false }
    );
  }
};
</script>
