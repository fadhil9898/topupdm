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
