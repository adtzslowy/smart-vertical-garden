<x-admin>
  <div class="row">
    <div class="col-12 mb-4">
      <h4 class="fw-bold text-success">🌿 Smart Vertical Garden Monitoring</h4>
      <p class="text-muted">Pemantauan kondisi lingkungan secara realtime</p>
    </div>
  </div>

  <div class="row" id="sensorCards">
    <!-- Kartu sensor akan di-generate oleh JavaScript -->
  </div>

  <!-- Chart Container -->
  <div class="row">
    <div class="col-lg-12">
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-3">Grafik Perubahan Sensor</h5>
          <canvas id="chartSensor" height="120"></canvas>
        </div>
      </div>
    </div>
  </div>

  <!-- Script Simulasi & Chart -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const sensors = [
      { id: "suhu", name: "Suhu", unit: "°C", min: 25, max: 35, color: "text-warning" },
      { id: "kelembapan", name: "Kelembapan", unit: "%", min: 60, max: 90, color: "text-primary" },
      { id: "cahaya", name: "Cahaya", unit: "lux", min: 200, max: 1000, color: "text-yellow" },
      { id: "air", name: "Air", unit: "cm", min: 5, max: 20, color: "text-success" }
    ];

    const cardContainer = document.getElementById("sensorCards");

    // Fungsi bikin kartu sensor
    sensors.forEach(sensor => {
      const col = document.createElement("div");
      col.className = "col-md-3 col-sm-6 mb-4";
      col.innerHTML = `
        <div class="card text-center border-0 shadow-sm">
          <div class="card-body">
            <h5 class="card-title ${sensor.color} fw-semibold">${sensor.name}</h5>
            <h2 id="${sensor.id}" class="fw-bold text-dark">-- ${sensor.unit}</h2>
            <p id="status-${sensor.id}" class="badge bg-secondary px-3 py-1">Menunggu data...</p>
          </div>
        </div>
      `;
      cardContainer.appendChild(col);
    });

    // --- Fungsi simulasi data ---
    function getRandomValue(min, max) {
      return (min + Math.random() * (max - min)).toFixed(1);
    }

    // --- Fungsi menentukan status ---
    function getStatus(sensor, value) {
      const v = parseFloat(value);
      let status = "Normal", color = "bg-success";

      if (v < sensor.min + (sensor.max - sensor.min) * 0.2) {
        status = "Rendah"; color = "bg-warning";
      }
      if (v > sensor.max - (sensor.max - sensor.min) * 0.2) {
        status = "Tinggi"; color = "bg-danger";
      }
      return { status, color };
    }

    function updateSensors() {
      sensors.forEach(sensor => {
        const value = getRandomValue(sensor.min, sensor.max);
        const valueEl = document.getElementById(sensor.id);
        const statusEl = document.getElementById(`status-${sensor.id}`);

        valueEl.textContent = `${value} ${sensor.unit}`;
        const { status, color } = getStatus(sensor, value);
        statusEl.textContent = status;
        statusEl.className = `badge ${color} px-3 py-1`;
      });
    }

    // --- CHART.JS MULTI SENSOR ---
    const ctx = document.getElementById("chartSensor");
    const chartData = {
      labels: [],
      datasets: [
        { label: "Suhu (°C)", data: [], borderColor: "#f97316", tension: 0.3 },
        { label: "Kelembapan (%)", data: [], borderColor: "#3b82f6", tension: 0.3 },
        { label: "Cahaya (lux)", data: [], borderColor: "#eab308", tension: 0.3 },
        { label: "Air (cm)", data: [], borderColor: "#22c55e", tension: 0.3 }
      ]
    };
    const chart = new Chart(ctx, {
      type: "line",
      data: chartData,
      options: {
        responsive: true,
        scales: { y: { beginAtZero: false } },
        plugins: { legend: { position: 'bottom' } }
      }
    });

    function updateChart() {
      const now = new Date().toLocaleTimeString();
      if (chartData.labels.length > 10) {
        chartData.labels.shift();
        chartData.datasets.forEach(d => d.data.shift());
      }
      chartData.labels.push(now);
      sensors.forEach((sensor, i) => {
        const value = getRandomValue(sensor.min, sensor.max);
        chartData.datasets[i].data.push(value);
      });
      chart.update();
    }

    // Interval simulasi
    updateSensors();
    updateChart();
    setInterval(() => { updateSensors(); updateChart(); }, 2000);
  </script>
</x-admin>
