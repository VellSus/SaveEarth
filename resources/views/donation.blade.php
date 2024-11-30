<link rel = "stylesheet" href="./css/bootstrap.css">
<link rel = "stylesheet" href="./donation.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- just in case need to change font-->
 @include('layout.navbar')
<div class="background">
    <div class="container text-center py-3">
        <!-- name -->
        <div class="mb-4">
        <span class="S">S</span>
        <span class="A1">A</span>
        <span class="V">V</span>
        <span class="E1">E</span>
        <span class="E2">E</span>
        <span class="A2">A</span>
        <span class="R">R</span>
        <span class="T">T</span>
        <span class="H">H</span>
            <div class="earth">
                <h1 class="amount">{{ $totalDonated }}</h1>
            </div>
        </div>
    </div>
</div>

        <!-- Form Section -->
    <form action="{{ route('donation.store') }}" method="POST">
        @csrf
        <div class="form-section mx-auto p-4 mb-4 border rounded shadow p-3 mb-5" style="width: 500px; background-image:linear-gradient(#44FC3E, #FFFFFF);"id="donasi">
            <h3 class="text-center fw-bold" style="color: #19406C; font-size:35;">SELAMATKAN BUMI!</h3>
            <p class="text-center fw-bold" style="color: #19406C;">Rp.10,000 PER TANAMAN</p>
                <div class="mb-3">
                    <input type="number" id="plants" name="planted" class="form-control rounded border border-4 border-dark" placeholder="Jumlah tanaman" required>
                </div>
                <p class="fw-bold text-center">Total: Rp.<span id='total'>0</span></p>
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Email:</label>
                    <input type="text" id="email" name="email" class="form-control rounded border border-4 border-dark" placeholder="Email donor" required maxlength="30">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Nama:</label>
                    <input type="text" id="name" name="name" class="form-control rounded border border-4 border-dark" placeholder="Nama yang ingin di display" required maxlength="20">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label fw-bold">Pesan:</label>
                    <textarea id="message" name="message" class="form-control rounded border border-4 border-dark" placeholder="Pesan yang ingin di display" maxlength="40" style="overflow: hidden; resize: none; height: 40px;"></textarea>
                </div>
                <div class="alert alert-danger text-center" role="alert" id="alert1">isilah nama dan jumlah tanaman</div>
                <button type="submit" name="action"  value="confirm" class="btn btn-primary w-100 fw-bold" style="border-radius:30px" id="pembayaranbutton">Pembayaran</button>
        </div>
        <!--payment section-->
        <div class="form-section mx-auto p-4 mb-4 border border-4 border-dark rounded" style="max-width: 400px; background-color: #b0e8b5;" id="pembayaran">
            <h2 class="text-center">Info Pembayaran</h2>
            <hr>
            <h2 class="text-center">total payment: RP.<span id="total2">0</span></h2>
            <input type="number" id="cardNumber" class="form-control text-center rounded border border-4 border-dark" placeholder="CARD NUMBER" maxlength="19">
            <input type="text" id="cardName" class="form-control text-center rounded border border-4 border-dark mb-2" placeholder="CARDHOLDER NAME">
            <div class="row">
                <div class="col-4">
                    <input type="number"id="cardMM" class="form-control text-center rounded border border-4 border-dark" placeholder="MM" maxlength="2" pattern="\d*" >
                </div>
                <div class="col-4">
                    <input type="number" id="cardYY"class="form-control text-center rounded border border-4 border-dark" placeholder="YY" maxlength="4" pattern="\d*" >
                </div>
                <div class="col-4">
                    <input type="number"id="cardCVV" class="form-control text-center rounded border border-4 border-dark" placeholder="CVV" maxlength="4" pattern="\d*">
                </div>
            </div> 
            <div class="alert alert-danger text-center" role="alert" id="alert2" style="margin-top: 20px;">isilah informasi yang kosong</div>
            <div class="expiry-cvv mt-3 row">
                <div class="col-4"style="width:180px;">
                <button type="submit" name="action"  value="confirm" class="btn btn-primary w-100 fw-bold mb-2" style="border-radius:30px" id="confirmbutton">CONFIRM</button>
                </div>
                <div class="col-4"style="width:180px;">
                <button type="reset" class="btn btn-primary w-100 fw-bold" style="border-radius:30px" id="cancelbutton">CANCEL</button>
                </div>
            </div>
        </div>
        </form>


        <!-- Leaderboard Section -->
        <div id=terbanyak>
            <h3 class="text-center fw-bold" style="color: #19406C; font-size:100;">Leaderboard</h3>
            <div class="d-flex justify-content-center my-3">
                <button class="btn border border-4 border-dark rounded mx-2"style="width:200px;color: #19406C;background-color: #96CC94"id="terbarubutton">Terbaru</button>
                <button class="btn border border-4 border-dark rounded mx-2"style="width:200px;color: #19406C;background-color: #b0e8b5">Tanaman Terbanyak</button>
            </div>
            <img src="tree.png"class="rounded-circle border border-dark text-centered rounded mx-auto d-block" style="max-width: 100px;background-image: linear-gradient(#44FC3E, #FFFFFF);">
            <div class="leaderboard-card mx-auto p-3 mb-3 text-center" style="max-width: 700px;background-image: linear-gradient(#19406C, #327CD2);margin-top:-20px;z-index:2;">
                <h4 class="fw-bold" style="font-size:60px;">{{ $highestPlantedDonation->name }}</h4>
                <p class="fs-2 border rounded-pill" style="background-color: #96CC94">{{ number_format($highestPlantedDonation->planted) }} tanaman</p>
                <span style="font-size:30px;">{{ $highestPlantedDonation->message }}</span>
                <p class="donation-date">ditanam pada {{ \Carbon\Carbon::parse($highestPlantedDonation->created_at)->format('d/m/Y') }}</p>
            </div>

    @foreach($nextHighestPlantedDonations as $donation)
    <div style="margin-bottom:20px;">
        <div class="d-flex flex-column align-items-start" style="position: relative; max-width: 700px; margin: auto;">
            <div class="rounded-circle border border-dark" style="width: 60px; height: 60px; position: absolute; background-image: linear-gradient(#44FC3E, #FFFFFF); top: 6px; left: -30px;">
                <img src="tree.png" class="rounded-circle border border-white" style="width: 50px; height: 50px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
            </div>
            <div class="leaderboard-card mx-auto p-1" style="width: 700px; height: 70px; background-image: linear-gradient(to right, #19406C, #327CD2); display: flex; justify-content: space-between; align-items: center;">
                <div class="flex-grow-1 d-flex flex-column" style="margin-left: 25px;">
                    <h4 class="mb-0 fw-bold" style="font-size:30px;">{{ $donation->name }}</h4>
                    <span style="font-size: 18px; line-height: 1;">{{ $donation->message }}</span>
                </div>
                <div class="text-end flex-shrink-1">
                    <h4 class="mb-0 border rounded-pill text-center" style="background-color: #96CC94; font-size:30px;">{{ number_format($donation->planted) }} tanaman</h4>
                    <p class="donation-date mb-0" style="font-size: 15px; line-height: 1;">ditanam pada {{ \Carbon\Carbon::parse($donation->created_at)->format('d/m/Y') }}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
    
        <div id="terbaru">
    <h3 class="text-center fw-bold" style="color: #19406C; font-size:100;">Leaderboard</h3>
    <div class="d-flex justify-content-center my-3">
        <button class="btn border border-4 border-dark rounded mx-2" style="width:200px;color: #19406C;background-color: #b0e8b5">Terbaru</button>
        <button class="btn border border-4 border-dark rounded mx-2" style="width:200px;color: #19406C;background-color: #96CC94" id="terbanyakbutton">Tanaman Terbanyak</button>
    </div>
    @foreach($latestDonations as $donation)
    <div style="margin-bottom:20px;">
        <div class="d-flex align-items-start" style="position: relative; max-width: 700px; margin: auto;">
            <div class="rounded-circle border border-dark" style="width: 60px; height: 60px; position: absolute; background-image: linear-gradient(#44FC3E, #FFFFFF); top: 6px; left: -30px;">
                <img src="tree.png" class="rounded-circle border border-white" style="width: 50px; height: 50px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
            </div>
            <div class="leaderboard-card mx-auto p-1" style="width: 700px; height: 70px; background-image: linear-gradient(to right, #19406C, #327CD2); display: flex; justify-content: space-between; align-items: center;">
                <div class="flex-grow-1 d-flex flex-column" style="margin-left: 25px;">
                    <h4 class="mb-0 fw-bold" style="font-size:30px;">{{ $donation->name }}</h4>
                    <span style="font-size: 18px; line-height: 1;">{{ $donation->message }}</span>
                </div>
                <div class="text-end flex-shrink-1">
                    <h4 class="mb-0 border rounded-pill" style="background-color: #96CC94; font-size:30px;">{{ number_format($donation->planted) }} tanaman</h4>
                    <p class="donation-date mb-0" style="font-size: 15px; line-height: 1;">ditanam pada {{ \Carbon\Carbon::parse($donation->created_at)->format('d/m/Y') }}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<script>
    $(document).ready(function() {
        var total=0;
        $('#alert1').hide();
        $('#alert2').hide();
        $('#plants').on('input', function() {
            var plantCount = parseInt($(this).val()) || 0;
            total = plantCount * 10000;
            $('#total').text(total.toLocaleString('en-US'));
        });
        $('#terbaru').hide();
        $('#pembayaran').hide();
        $('#terbarubutton').click(function(){
            $('#terbaru').show();
            $('#terbanyak').hide();
        });
        $('#terbanyakbutton').click(function(){
            $('#terbaru').hide();
            $('#terbanyak').show();
        });
        $('#cancelbutton').click(function(){
            $('#donasi').show();
            $('#pembayaran').hide();
        });
        $('#confirmbutton').click(function(){
        if(!$('#cardName').val()||!$('#cardMM').val()||!$('#cardYY').val()||!$('#cardCVV').val()||!$('#cardNumber').val()){
             $('#alert2').show();
            }
            else{

            }
        });
        $('#pembayaranbutton').click(function(){
            if(!$('#name').val()||!$('#plants').val()||!$('#email').val()){
             $('#alert1').show();
            }
            else{
            $('form').submit();
            $('#donasi').hide();
            $('#pembayaran').show();
            $('#total2').text(total.toLocaleString('en-US'));
            }
        });
    
        
    });
</script>

