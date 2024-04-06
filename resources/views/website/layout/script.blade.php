    <!-- Core JavaScript
    ================================================== -->
    <script src="{{ asset('website/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('website/assets/js/tether.min.js') }}"></script>
    <script src="{{ asset('website/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('website/assets/js/animate.js') }}"></script>
    <script src="{{ asset('website/assets/js/custom.js') }}"></script>

    {{-- * --------------------------------------------------------------------------------  --}}
    {{-- *                                     my script                                     --}}
    {{-- * --------------------------------------------------------------------------------  --}}

    <script src="{{ asset('website/assets/js/my_script/script.js') }}"></script>
    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
          const images = document.getElementsByTagName('img');
          for (let i = 0; i < images.length; i++) {
            images[i].setAttribute('onContextMenu', 'return false;');
          }
        });
      </script>
