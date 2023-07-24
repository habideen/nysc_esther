<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css"
  integrity="sha512-zxBiDORGDEAYDdKLuYU9X/JaJo/DPzE42UubfBw9yg8Qvb2YRRIQ8v4KsGHOx2H1/+sdSXyXxLXv5r7tHc9ygg=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"
  integrity="sha512-Gs+PsXsGkmr+15rqObPJbenQ2wB3qYvTHuJO6YJzPe/dTLvhy0fmae2BcnaozxDo5iaF8emzmCZWbQ1XXiX2Ig=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  const boundaryDimensions = { width: 400, height: 400 };
        const viewportDimensions = { width: 370, height: 370 };
        
        const desiredMaximumWidth = 300; // pixels
        const maxZoom = image.width * viewportDimensions.width / image.width / desiredMaximumWidth;

        var resize = $('#upload-demo').croppie({
            enableExif: true,
            enableOrientation: true,
            enableResize: false,
            maxZoom: 0.3,
            viewport: { // Default { width: 100, height: 100, type: 'square' } 
                width: 150,
                height: 150,
                type: 'square' //circle
            },
            boundary: {
                width: 300,
                height: 300
            }
        });
        $('#image').on('change', function () { 
        var reader = new FileReader();
            reader.onload = function (e) {
            resize.croppie('bind', {
                url: e.target.result
            }).then(function(){
                console.log('jQuery bind complete');
                $('.cr-slider').attr({'min':0.02000, 'max':1.5000});
                $('#image_result').val('')
            });
            }
            reader.readAsDataURL(this.files[0]);
            $('#modal').modal('show')
        });

        // 

        $('.btn-upload-image').on('click', function (ev) {
            resize.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function (img) {
                $('#image_result').val(img)
            });
        });
</script>