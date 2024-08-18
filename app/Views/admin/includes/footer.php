        <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="footer-inner-wraper">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
              </div>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    
    <script src="<?= base_url() ?>/public/admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?= base_url() ?>/public/common/jquery-confirm-v3.3.4/js/jquery-confirm.js"></script>

    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?= base_url() ?>/public/admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="<?= base_url() ?>/public/admin/assets/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url() ?>/public/admin/assets/js/off-canvas.js"></script>
    <script src="<?= base_url() ?>/public/admin/assets/js/hoverable-collapse.js"></script>
    <script src="<?= base_url() ?>/public/admin/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?= base_url() ?>/public/admin/assets/js/dashboard.js"></script>


    <script>
      
      <?php if (session()->getFlashdata('message')): ?>
    <div id="flash-message" class="alert alert-<?= session()->getFlashdata('status') ?>" role="alert">
        <?= session()->getFlashdata('message') ?>
    </div>
<?php endif; ?>
      
    </script>
   
    <!-- End custom js for this page -->
  </body>
</html>