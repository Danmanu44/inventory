<x-app-layout>
    <div class="content-body text-center">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card card-widget">
                    <div class="card-body gradient-4">
                        <h3 class="text-white">DISPENSE</h3>
                    </div>
                </div>
                <form method="POST" action="{{ route('dispense.verify') }}">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text-white">Enter Beneficiary Id</h2>
                            <div class="input-group mb-3">
                                <input type="text" name="beneficiary_id" class="tdl-new2 form-control" placeholder="Enter Beneficiary ID" autofocus required value="{{ old('beneficiary_id') }}">
                            </div>
                            <video id="scanner" playsinline></video>
                            @error('beneficiary_id')
                                <div class="alert alert-danger">
                                    <strong class="text-bold text-left">Beneficiary Id not exist</strong>
                                </div>
                            @enderror





                            <div class="d-flex justify-content-end">
                                <button class="btn btn-primary" type="submit">Proceed</button>
                            </div>
                        </div>
                    </div>
                </form>


            </div>
        </div>







    </div>
    <script>
        // Wait for the DOM to be fully loaded
$(document).ready(function() {
    // Access the device camera and start the video stream
    const scanner = new Instascan.Scanner({ video: document.getElementById('scanner') });
    scanner.addListener('scan', function(content) {
        // Content variable contains the QR code data
        $('#qr-result').text(content);
        // Optionally, you can add logic to do something with the scanned data
    });

    // Start scanning when the camera feed is ready
    Instascan.Camera.getCameras().then(function(cameras) {
        if (cameras.length > 0) {
            scanner.start(cameras[0]); // Use the first available camera
        } else {
            console.error('No cameras found.');
        }
    }).catch(function(e) {
        console.error(e);
    });
});

    </script>
</x-app-layout>
