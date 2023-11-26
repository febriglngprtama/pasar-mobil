<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script src="/assets/js/admin/vendor/jquery/jquery.min.js"></script>
<script src="/assets/js/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
</script>

<script src="/assets/js/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

<script src="/assets/js/admin/sb-admin-2.min.js"></script>

<script src="/assets/js/admin/vendor/chart.js/Chart.min.js"></script>

<script src="/assets/js/dashbard/demo/chart-area-demo.js"></script>
<script src="/assets/js/admin/demo/chart-pie-demo.js"></script>

<script src="/assets/js/admin/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/js/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script src="/assets/js/admin/demo/datatables-demo.js"></script>

<script src="/assets/js/admin/trix.js"></script>
<script>
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault()
    })

    function previewImage() {
        const image = document.querySelector('#image')
        const imgPreview = document.querySelector('.img-preview')

        const blob = URL.createObjectURL(image.files[0]);
        imgPreview.src = blob;
    }
</script>
