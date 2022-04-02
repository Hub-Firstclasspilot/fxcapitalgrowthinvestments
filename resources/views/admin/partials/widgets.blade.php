@php
    switch ($user->account->account_currency) {
        case 'GBP':
            $symbol = '£';
            break;

        case 'EUR':
            $symbol = '€';
            break;

        case 'Bitcoin':
            $symbol = '₿';
            break;

        default:
            $symbol = '$';
            break;
    }

    $deposits = 0;

    if (!empty($user->deposits)) {
        foreach ($user->deposits as $deposit) {
            $deposits += $deposit->amount;
        }
    }
@endphp

 <div class="mb-3 row">
                    <div class="col-12">
                         <div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>

  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "title": "S&P 500",
      "proName": "OANDA:SPX500USD"
    },
    {
      "title": "Shanghai Composite",
      "proName": "INDEX:XLY0"
    },
    {
      "title": "EUR/USD",
      "proName": "FX_IDC:EURUSD"
    },
    {
      "title": "BTC/USD",
      "proName": "BITSTAMP:BTCUSD"
    },
    {
      "title": "ETH/USD",
      "proName": "BITSTAMP:ETHUSD"
    }
  ],
  "colorTheme": "light",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
</div>

<div class="mt-3 row">
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="text-white card w-green">
        <div class="card-body">
            <h5 class="card-title font-weight-lighter"><small>BALANCE</small></h5>
            <p class="card-text font-weight-bolder">{{ $symbol. " ".number_format($user->account->balance) ?? $symbol."0" }}</p>
            <hr class="bg-white" style="height: 1px;">
            <div class="">
                6% from last week
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="text-white card w-blue">
        <div class="card-body">
            <h5 class="card-title font-weight-lighter"><small>INVESTED</small></h5>
            <p class="card-text font-weight-bolder">{{ $symbol." ".number_format($user->account->invested_amount) ?? $symbol."0" }} </p>
            <hr class="bg-white" style="height: 1px;">
            <div class="">
                Profit rate: {{ $user->account->profit_percentage }}%
            </div>
        </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="text-white card w-purple">
        <div class="card-body">
            <h5 class="card-title font-weight-lighter"><small>BTC BALANCE</small></h5>
            <div class="clearfix card-text font-weight-bolder">
                <span class="float-left">{{ $user->account->btc_balance }}</span>
            </div>
            <hr class="bg-white" style="height: 1px;">
            <div class="">
                BTC BALANCE
            </div>
        </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="text-white card w-green" style="padding: 0;">
        <div class="card-body">
            <h5 class="card-title font-weight-lighter"><small>ACCOUNT TYPE || TOTAL WITHDRAWS</small></h5>
            <div class="clearfix card-text">
                <span class="float-left">{{ $user->account_type }}</span>
                <span class="float-right pr-3">{{ $withdrawals ?? "0" }}</span>
            </div>
            <hr class="bg-white" style="height: 1px;">
            <div class="">
                TRADE ACCOUNT
            </div>
        </div>
        </div>
    </div>
</div>
