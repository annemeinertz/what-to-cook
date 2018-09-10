<section class="module">
  <div class="container">
    <div class="content">
      <div class="category-title has-action">
        <p>Add ingredient</p>
        <a href="/kitchen" class="btn btn-sm btn-dark">
          <i class="fa fa-fw fa-angle-left"></i> Back to kitchen
        </a>
      </div>
      <div class="kitchen-title">
        <p>Scan a barcode to add the product</p>
      </div>
      <div class="barcode-scanner">
        <div id="fail">
          <i class="far fa-fw fa-camera"></i>
          <p>Allow access to camera to continue</p>
        </div>
        <div id="scanFrame"></div>
        <video muted id="video"></video>
      </div>
      <button type="button" class="btn" id="scanBtn">
        <i class="fa fa-fw fa-barcode"></i> Scan image
      </button>
      <script type="text/javascript">
        var video = document.querySelector('#video');
        video.setAttribute('playsinline', '');
        video.setAttribute('autoplay', '');
        video.setAttribute('muted', '');
        video.style.width = document.querySelector('.barcode-scanner').width;
        video.style.height = '400px';

        var facingMode = "environment";
        var constraints = {
          audio: false,
          video: {
           facingMode: facingMode
          }
        };

        /* Stream it to video element */
        navigator.mediaDevices.getUserMedia(constraints).then(function success(stream) {
          video.srcObject = stream;
          document.querySelector("#fail").remove();
          document.querySelector("#scanFrame").className += " active";
          document.querySelector("#scanBtn").className += " active";
        });
      </script>
    </div>
  </div>
</section>
