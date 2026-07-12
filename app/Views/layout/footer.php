    <footer class="footer">
        <div class="row">
            <div class="col-md-6">
                © <?= date('Y'); ?>
                Sistem Informasi Posyandu
            </div>
            <div class="col-md-6 text-end">
                Version 1.0
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggle = document.getElementById('profileToggle');
        const menu = document.getElementById('profileMenu');

        toggle.addEventListener('click', function (e) {
            e.stopPropagation();
            menu.classList.toggle('show');
        });

        document.addEventListener('click', function (e) {
            if (!document.getElementById('profileDropdown').contains(e.target)) {
                menu.classList.remove('show');
            }
        });
    });
    </script>
    </body>
    </html>