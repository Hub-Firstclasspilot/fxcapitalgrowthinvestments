@extends('admin.layouts.base')

@section('title')
{!! "Trade Dashboard" !!}
@endsection

@section('body')
    <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Hello, {{ $user->username }}</h4>
                    </div>
                    <div class="text-right col-md-7 align-self-center">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <x-verified></x-verified>
                @include('admin.partials.widgets')

                <div class="row">
                    <div class="col-lg-8 col-sm-12">
                        <div class="card">
                            <div class="text-white card-header bg-info">
                                <h5 class="card-title text-uppercase">Crypto Market Widget</h5>
                            </div>
                            <div class="card-body">
                                <div class="col-12">
                                    <!-- TradingView Widget BEGIN -->
                                        <div class="tradingview-widget-container">
                                          <div id="technical-analysis-chart-demo"></div>
                                          <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/AAPL/" rel="noopener" target="_blank"><span class="blue-text">AAPL Chart</span></a> by TradingView</div>
                                          <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                                          <script type="text/javascript">
                                          new TradingView.widget(
                                          {
                                          "container_id": "technical-analysis-chart-demo",
                                          "width": "100%",
                                          "height": "100%",
                                          "autosize": true,
                                          "symbol": "AAPL",
                                          "interval": "D",
                                          "timezone": "exchange",
                                          "theme": "dark",
                                          "style": "1",
                                          "toolbar_bg": "#f1f3f6",
                                          "withdateranges": true,
                                          "hide_side_toolbar": false,
                                          "allow_symbol_change": true,
                                          "save_image": false,
                                          "studies": [
                                            "ROC@tv-basicstudies",
                                            "StochasticRSI@tv-basicstudies",
                                            "MASimple@tv-basicstudies"
                                          ],
                                          "show_popup_button": true,
                                          "popup_width": "1000",
                                          "popup_height": "650",
                                          "locale": "en"
                                        }
                                          );
                                          </script>
                                        </div>
                                        <!-- TradingView Widget END -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card m-b-15">
                                    <div class="text-white card-header bg-info">
                                        <h5 class="card-title text-uppercase">Currency Converter</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div id='gcw_mainF9JiwHZs1' class='gcw_mainF9JiwHZs1'></div>
                                                    <a id='gcw_siteF9JiwHZs1' href='https://freecurrencyrates.com/en/'>FreeCurrencyRates.com</a>
                                                    <script>
                                                        function reloadF9JiwHZs1(){
                                                            var sc = document.getElementById('scF9JiwHZs1');
                                                            if (sc) sc.parentNode.removeChild(sc);
                                                            sc = document.createElement('script');
                                                            sc.type = 'text/javascript';
                                                            sc.charset = 'UTF-8';
                                                            sc.async = true;
                                                            sc.id='scF9JiwHZs1';
                                                            sc.src = 'https://freecurrencyrates.com/en/widget-vertical?iso=USDEURGBPJPYCNYBTCCAD&df=2&p=F9JiwHZs1&v=fits&source=fcr&width=300&width_title=0&firstrowvalue=1&thm=A6C9E2,FCFDFD,4297D7,5C9CCC,FFFFFF,C5DBEC,FCFDFD,2E6E9E,000000&title=Currency%20Converter&tzo=-60';
                                                            var div = document.getElementById('gcw_mainF9JiwHZs1');
                                                            div.parentNode.insertBefore(sc, div);
                                                            }
                                                        reloadF9JiwHZs1();
                                                    </script>
                                                    <!--End of Currency Converter widget by FreeCurrencyRates.com -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-sm-12">
                        <div class="card">
                            <div class="text-white card-header bg-info">
                                <h4 class="card-title">Place a trade Now</h4>
                            </div>
                            <div class="card-body">
                                <div class="alert alert-success">
                                    <i class="fa fa-info-circle fa-2x pull-left m-r-10"></i>
                                    <p align="justify" style="font-size: 10px">
                                        Place a Random trade for our Software Robot. Trades place here are analyzed carefully and selected based on the anaylsis result. All winnings from your trades are summed and added to your account at the end of every trade circle (This could be 2 or 3 days). <br>Ensure to enter a valid asset name, invalid asset names will be discarded.<br> <span class="label label-danger"><i class="fa fa-fw fa-chart-line"></i> <a href="https://www.tradingview.com/markets/" style="text-decoration: none; font-weight: bold; color: white" target="_blank">Click HERE to see the List of ALL Trading Assets.</a></span>
                                    </p>
                                </div>

                                <form action="" method="POST">
                                    <fieldset>
                                        <div class="form-group">
                                            <label for="username">Firstname</label>
                                            <input type="text" required class="form-control" name="tUser" id="username" value="Favour" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="amount">Trade Amount: <small>Minimum of $100</small></label>
                                            <input type="number" min="100" required class="form-control" name="tAmount" id="amount" placeholder="Enter Amount">
                                        </div>

                                        <div class="form-group">
                                            <label for="name">Asset Name: <small>Click </small> <span class="label label-danger"><i class="fa fa-fw fa-chart-line"></i> <a href="https://www.tradingview.com/markets/" style="text-decoration: none; font-weight: bold; color: white" target="_blank">HERE</a></span><small> to see ALL</small></label>
                                            <input type="text" required class="form-control" name="tAsset" id="name" placeholder="Enter Asset Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="asset">Select Asset Category:</label>
                                            <select class="form-control" name="tCat" id="asset" required>
                                                <option value="All">All</option>
                                                <option value="Stock">Stock</option>
                                                <option value="Future">Future</option>
                                                <option value="Forex">Forex</option>
                                                <option value="CFD">CFD</option>
                                                <option value="Cryptocurrency">Cryptocurrency</option>
                                                <option value="Index">Index</option>
                                                <option value="Economy">Economy</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                        <input type="hidden"  value="0" name="status">
                                        <button type="submit" name="trade" class="btn btn-sm btn-block btn-info m-r-5"><i class='fa fa-plus-circle'></i> TRADE NOW</button>
                                    </fieldset>
					            </form>
                            </div>
                        </div>
                    </div>
                    <div class="ml-auto col-lg-8 col-sm-12">
                        <div class="card">
                            <div class="text-white card-header bg-info">
                                <h4 class="card-title">Crypto Market Widget</h4>
                            </div>
                            <div class="card-body">
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <div class="tradingview-widget-container__widget"></div>
                                    <div class="tradingview-widget-copyright"></div>
                                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                                        {
                                            "width": "700",
                                            "height": "500",
                                            "defaultColumn": "overview",
                                            "screener_type": "crypto_mkt",
                                            "displayCurrency": "USD",
                                            "colorTheme": "dark",
                                            "locale": "en"
                                        }
                                    </script>
                                </div>
                                <!-- TradingView Widget END -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>


                <!-- ============================================================== -->
                <!-- End PAge Content -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
    </div>
@endsection
