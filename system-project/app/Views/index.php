    <title>Index page</title>
    </head>
<body>
    <!-- main content here -->
    <main>

    </main>
    <script>
        $(document).ready(function() {
           const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'success',
  title: 'Signed in successfully'
})
        })
    </script>
    <!-- footer auto generated in this section -->