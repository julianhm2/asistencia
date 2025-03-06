<x-app-layout>

    <style>
        .card {
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            border-radius: 15px;
        }
    </style>

    <div class="container mt-5 text-white">
        <h1 class="text-center" style="color: #FCA311;">Dashboard de Asistencias</h1>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card p-3 text-white" style="background-color: #2C2C3E; border-radius: 15px;">
                    <h5 class="text-center">Asistencias vs Faltas</h5>
                    <canvas id="asistenciaChart"></canvas>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-3" style="background-color: #2C2C3E; border-radius: 15px;">
                    <h5 class="text-center text-white">Asistencias por Día</h5>
                    <canvas id="asistenciaDiariaChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Gráfica de Asistencias vs Faltas
            let ctx1 = document.getElementById('asistenciaChart').getContext('2d');
            new Chart(ctx1, {
                type: 'doughnut', // Tipo de gráfica (pastel)
                data: {
                    labels: ['Asistencias', 'Faltas'],
                    datasets: [{
                        data: [85, 35], // Datos de ejemplo (ajústalos según sea necesario)
                        backgroundColor: ['#FCA311', '#E63946'],
                        hoverBackgroundColor: ['#FFB703', '#D62828']
                    }]
                }
            });

            // Gráfica de Asistencias por Día
            let ctx2 = document.getElementById('asistenciaDiariaChart').getContext('2d');
            new Chart(ctx2, {
                type: 'bar',
                data: {
                    labels: ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'],
                    datasets: [{
                        label: 'Asistencias',
                        data: [80, 90, 85, 70, 95], // Datos de ejemplo
                        backgroundColor: '#4A90E2'
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        } // Ocultar leyenda
                    }
                }
            });
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</x-app-layout>
