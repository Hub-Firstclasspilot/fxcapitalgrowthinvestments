@push('assets')
<style>
    .wrapper {
        width: 100%;
        padding: 1% 4%;
    }

    .logo-wrapper {
        width: 80%;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .logo {
        width: 12%;
        display: flex;
        justify-content:center;
        align-items: center;
    }

    img {
        width: 70%;
    }
</style>
@endpush

<div class="wrapper">
    <div class="logo-wrapper">
        <div class="logo"><img src="{{ asset('images/logos/litecoin.png') }}" alt="Litecoin"></div>
        <div class="logo"><img src="{{ asset('images/logos/moneygram.png') }}" alt="Moneygram"></div>
        <div class="logo"><img src="{{ asset('images/logos/bitcoin.png') }}" alt="Bitcoin"></div>
        <div class="logo"><img src="{{ asset('images/logos/mastercard.png') }}" alt="Mastercard"></div>
        <div class="logo"><img src="{{ asset('images/logos/visa.png') }}" alt="Visa"></div>
        <div class="logo"><img src="{{ asset('images/logos/bank transfer.png') }}" alt="Bank Transfer"></div>
        <div class="logo"><img src="{{ asset('images/logos/paypal.png') }}" alt="Paypal"></div>
    </div>
</div>