<x-app-layout>

    <style>
        .table {
            border-radius: 15px;
            overflow: hidden;
            /* Para que el border-radius se aplique bien */
        }
    </style>

    

    <!-- CONTENIDO PRINCIPAL -->
    <div class="container mt-5 text-white" style="background-color: #1E1E2F; padding: 30px; border-radius: 10px;">
        <h1 class="text-center" style="color: #FCA311;">Registro de Asistencias</h1>
        <p class="text-center lead">Escanea tu código QR para registrar tu entrada o salida.</p>

        <!-- TARJETAS DE ESTADÍSTICAS -->
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card text-center shadow-sm" style="background-color: #2C2C3E; color: #E5E5E5;">
                    <div class="card-body">
                        <h5 class="card-title">Total de Empleados</h5>
                        <p class="display-6" style="color: #FCA311;">120</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center shadow-sm" style="background-color: #2C2C3E; color: #E5E5E5;">
                    <div class="card-body">
                        <h5 class="card-title">Asistencias Hoy</h5>
                        <p class="display-6 text-success">85</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center shadow-sm" style="background-color: #2C2C3E; color: #E5E5E5;">
                    <div class="card-body">
                        <h5 class="card-title">Faltas Hoy</h5>
                        <p class="display-6 text-danger">35</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- TABLA DE HISTORIAL -->

        <div class="mt-5">
            <h3 class="text-center">Historial de Asistencias</h3>
            <input type="text" id="search" class="form-control mb-3 mt-5" placeholder="Buscar asistencia...">

            <table class="table mt-3" style="background-color: #2C2C3E; color: #E5E5E5; border-radius:10px">
                <thead style="background-color: #FCA311; color: #1E1E2F;">
                    <tr>
                        <th>ID</th>
                        <th>Empleado</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Juan Pérez</td>
                        <td>2024-02-26</td>
                        <td>08:00 AM</td>
                        <td><span class="badge bg-success">Entrada</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>María López</td>
                        <td>2024-02-26</td>
                        <td>08:05 AM</td>
                        <td><span class="badge bg-danger">Salida</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("search");
    searchInput.addEventListener("keyup", function () {
        let filter = searchInput.value.toLowerCase();
        let rows = document.querySelectorAll(".table tbody tr");

        rows.forEach(row => {
            let text = row.innerText.toLowerCase();
            row.style.display = text.includes(filter) ? "" : "none";
        });
    });
});

</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</x-app-layout>
