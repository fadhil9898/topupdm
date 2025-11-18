  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Inisialisasi Isotope
    var iso = new Isotope('.trending-box', {
      itemSelector: '.trending-items',
      layoutMode: 'fitRows'
    });

    // Filtering
    var filterButtons = document.querySelectorAll('.trending-filter a');
    filterButtons.forEach(button => {
      button.addEventListener('click', function (e) {
        e.preventDefault();

        // Remove aktif class
        filterButtons.forEach(btn => btn.classList.remove('is_active'));
        this.classList.add('is_active');

        var filterValue = this.getAttribute('data-filter');
        iso.arrange({ filter: filterValue });
      });
    });
  });
</script>
